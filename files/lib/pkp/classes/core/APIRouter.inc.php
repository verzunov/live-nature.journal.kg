<?php

/**
 * @file classes/core/APIRouter.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2000-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class APIRouter
 * @ingroup core
 *
 * @brief Map HTTP requests to a REST API using the Slim microframework.
 *
 * Requests for [index.php]/api are intercepted for site-level API requests,
 * and requests for [index.php]/{contextPath}/api are intercepted for
 * context-level API requests.
 */

import('lib.pkp.classes.core.PKPRouter');
import('classes.core.Request');
import('classes.handler.Handler');

class APIRouter extends PKPRouter {

	/**
	 * Determines path info parts depending of disable_path_info config value
	 * @return array|NULL
	 */
	protected function getPathInfoParts() {
		$pathInfoEnabled = Config::getVar('general', 'disable_path_info') ? false : true;
		if ($pathInfoEnabled && isset($_SERVER['PATH_INFO'])) {
			return explode('/', trim($_SERVER['PATH_INFO'], '/'));
		}

		$request = $this->getApplication()->getRequest();
		$queryString = $request->getQueryString();
		$queryArray = array();
		if (isset($queryString)) {
			parse_str($queryString, $queryArray);
		}

		if (in_array('endpoint', array_keys($queryArray)) && isset($queryArray['journal'])) {
			$endpoint = $queryArray['endpoint'];
			return explode('/', trim($endpoint, '/'));
		}

		return null;
	}

	/**
	 * Determines whether this router can route the given request.
	 * @param $request PKPRequest
	 * @return boolean true, if the router supports this request, otherwise false
	 */
	function supports($request) {
		$pathInfoParts = $this->getPathInfoParts();

		if (!is_null($pathInfoParts) && count($pathInfoParts)>=2 && $pathInfoParts[1] == 'api') {
			// Context-specific API requests: [index.php]/{contextPath}/api
			return true;
		}

		return false;
	}

	/**
	 * Get the API version
	 * @return string
	 */
	function getVersion() {
		$pathInfoParts = $this->getPathInfoParts();
		return Core::cleanFileVar(isset($pathInfoParts[2]) ? $pathInfoParts[2] : '');
	}

	/**
	 * Get the entity being requested
	 * @return string
	 */
	function getEntity() {
		$pathInfoParts = $this->getPathInfoParts();
		return Core::cleanFileVar(isset($pathInfoParts[3]) ? $pathInfoParts[3] : '');
	}

	//
	// Implement template methods from PKPRouter
	//
	/**
	 * @copydoc PKPRouter::route()
	 */
	function route($request) {
		// Ensure slim library is available
		require_once('lib/pkp/lib/vendor/autoload.php');

		$sourceFile = sprintf('api/%s/%s/index.php', $this->getVersion(), $this->getEntity());

		if (!file_exists($sourceFile)) {
			$dispatcher = $this->getDispatcher();
			$dispatcher->handle404();
		}

		if (!defined('SESSION_DISABLE_INIT')) {
			// Initialize session
			SessionManager::getManager();
		}

		$handler = require ('./'.$sourceFile);
		$this->setHandler($handler);
		$handler->getApp()->run();
	}

	/**
	 * Get the requested operation
	 *
	 * @param $request PKPRequest
	 * @return string
	 */
	function getRequestedOp($request) {
		$handler = $this->getHandler();
		$container = $handler->getApp()->getContainer();
		$router = $container->get('router');
		$request = $container->get('request');
		$routeInfo = $router->dispatch($request);
		if (isset($routeInfo[1])) {
			$route = $router->lookupRoute($routeInfo[1]);
			$callable = $route->getCallable();
			if (is_array($callable) && count($callable) == 2)
				return $callable[1];
		}
		return '';
	}

	/**
	 * @copydoc PKPRouter::handleAuthorizationFailure()
	 */
	function handleAuthorizationFailure($request, $authorizationMessage) {
		$dispatcher = $this->getDispatcher();
		$dispatcher->handle404();
	}

	/**
	 * @copydoc PKPRouter::url()
	 */
	function url($request, $newContext = null, $endpoint = null, $op = null, $path = null,
			$params = null, $anchor = null, $escape = false) {

		// APIHandlers do not understand $op, $path or $anchor. All routing is baked
		// into the $endpoint string. It only accepts a string as the $newContext,
		// since it relies on this when path info is disabled.
		assert(is_null($op) && is_null($path) && is_null($anchor) && is_scalar($newContext));

		//
		// Base URL and Context
		//
		$baseUrlAndContext = $this->_urlGetBaseAndContext($request, $this->_urlCanonicalizeNewContext($newContext));
		$baseUrl = array_shift($baseUrlAndContext);
		$context = $baseUrlAndContext;

		//
		// Additional query parameters
		//
		$additionalParameters = $this->_urlGetAdditionalParameters($request, $params, $escape);

		//
		// Assemble URL
		//
		if ($request->isPathInfoEnabled()) {
			// If path info is enabled, everything but params goes into the path
			$pathInfoArray = array_merge(
				$context,
				['api',	'v1', $endpoint]
			);
			$queryParametersArray = $additionalParameters;
		} else {
			// If path info is disabled, the context and endpoint must be passed as
			// query params, and the context must be concatenated into the endpoint
			$pathInfoArray = array();
			$queryParametersArray = array_merge(
				$context,
				[sprintf('endpoint=/%s/api/%s/%s', $newContext, 'v1', $endpoint)],
				$additionalParameters
			);
		}

		return $this->_urlFromParts($baseUrl, $pathInfoArray, $queryParametersArray, $anchor, $escape);
	}
}
