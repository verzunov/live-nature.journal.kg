<?php

/**
 * @file controllers/tab/publicationEntry/form/CitationsForm.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CitationsForm
 * @ingroup controllers_tab_publicationEntry_form
 *
 * @brief Displays a citations form.
 */

import('lib.pkp.classes.form.Form');

class CitationsForm extends Form {

	/** @var Submission */
	var $_submission;

	/** @var int The current stage id, WORKFLOW_STAGE_ID_ */
	var $_stageId;

	/** @var int The current tab position */
	var $_tabPos;

	/** @var array Parameters to configure the form template. */
	var $_formParams;

	/**
	 * Constructor.
	 * @param $submission object
	 * @param $stageId integer
	 * @param $tabPos integer
	 * @param $formParams array
	 */
	function __construct($submission, $stageId, $tabPos, $formParams = null) {
		parent::__construct('controllers/tab/publicationEntry/form/citationsForm.tpl');

		$this->_submission = $submission;
		$this->_stageId = $stageId;
		$this->_tabPos = $tabPos;
		$this->_formParams = $formParams;

		$contextDao = Application::getContextDAO();
		$context = $contextDao->getById($this->_submission->getContextId());

		AppLocale::requireComponents(LOCALE_COMPONENT_PKP_EDITOR);

		if ($context->getSetting('citationsRequired')) {
			$this->addCheck(new FormValidator($this, 'citations', 'required', 'common.required'));
		}
		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
	}

	//
	// Getters
	//
	/**
	 * Get the submission
	 * @return Submission
	 */
	function getSubmission() {
		return $this->_submission;
	}

	/**
	 * Get the stage id
	 * @return integer WORKFLOW_STAGE_ID_
	 */
	function getStageId() {
		return $this->_stageId;
	}

	/**
	 * Get the tab position
	 * @return integer
	 */
	function getTabPosition() {
		return $this->_tabPos;
	}

	/**
	 * Get the extra form parameters.
	 * @return array
	 */
	function getFormParams() {
		return $this->_formParams;
	}

	//
	// Form methods
	//
	/**
	 * @copydoc Form::fetch()
	 */
	function fetch($request, $template = null, $display = false) {
		$submission = $this->getSubmission();
		$context = $request->getContext();
		$citationDao = DAORegistry::getDAO('CitationDAO');
		$parsedCitations = $citationDao->getBySubmissionId($submission->getId());
		$actionNames = array(
			'parse' => __('submission.parsedAndSaveCitations'),
		);
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign(array(
			'submission' => $this->getSubmission(),
			'stageId' => $this->getStageId(),
			'tabPos' => $this->getTabPosition(),
			'formParams' => $this->getFormParams(),
			'citationsRequired' => $context->getSetting('citationsRequired'),
			'parsedCitations' => $parsedCitations,
			'actionNames' => $actionNames,
		));
		return parent::fetch($request, $template, $display);
	}

	/**
	 * @copydoc Form::initData()
	 */
	function initData() {
		$submission = $this->getSubmission();
		$this->setData('citations', $submission->getCitations());
	}

	/**
	 * @copydoc Form::readInputData()
	 */
	function readInputData() {
		$this->readUserVars(array('citations'));
	}

	/**
	 * Parse and store the submission citations.
	 * @copydoc Form::execute()
	 */
	function execute($request) {
		parent::execute($request);
		if ($request->getUserVar('parse')) {
			$submission = $this->getSubmission();
			$rawCitationList = $this->getData('citations');
			$citationDao = DAORegistry::getDAO('CitationDAO');
			$citationDao->importCitations($submission->getId(), $rawCitationList);
			$submission->setCitations($rawCitationList);
			$submissionDao = Application::getSubmissionDAO();
			$submissionDao->updateObject($submission);
		}
	}

}


