<?php

/**
 * @file controllers/grid/settings/user/form/UserForm.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class UserForm
 * @ingroup controllers_grid_settings_user_form
 *
 * @brief Base class for user forms.
 */

import('lib.pkp.classes.form.Form');

class UserForm extends Form {

	/** @var Id of the user being edited */
	var $userId;

	/**
	 * Constructor.
	 * @param $request PKPRequest
	 * @param $userId int optional
	 * @param $author Author optional
	 */
	function __construct($template, $userId = null) {
		parent::__construct($template);

		$this->userId = isset($userId) ? (int) $userId : null;

		if (!is_null($userId)) {
			$this->addCheck(new FormValidator($this, 'userGroupIds', 'required', 'manager.users.roleRequired'));
		}
	}

	/**
	 * Initialize form data from current user profile.
	 */
	public function initData() {

		$userGroupDao = DAORegistry::getDAO('UserGroupDAO');
		$userGroups = $userGroupDao->getByUserId($this->userId);
		$userGroupIds = array();
		while ($userGroup = $userGroups->next()) {
			$userGroupIds[] = $userGroup->getId();
		}
		$this->setData('userGroupIds', $userGroupIds);

		parent::initData();
	}

	/**
	 * @copydoc Form::readInputData()
	 */
	public function readInputData() {
		$this->readUserVars(array('userGroupIds'));
		parent::readInputData();
	}

	/**
	 * @copydoc Form::display
	 */
	public function display($request = null, $template = null) {
		$context = $request->getContext();
		$contextId = $context ? $context->getId() : CONTEXT_ID_NONE;
		$templateMgr = TemplateManager::getManager($request);

		import('lib.pkp.controllers.list.users.SelectRoleListHandler');
		$selectRoleList = new SelectRoleListHandler(array(
			'contextId' => $contextId,
			'title' => 'grid.user.userRoles',
			'inputName' => 'userGroupIds[]',
			'selected' => $this->getData('userGroupIds'),
		));
		$templateMgr->assign(array(
			'selectUserListData' => json_encode($selectRoleList->getConfig()),
		));

		return $this->fetch($request);
	}

	/**
	 * @copydoc Form::execute()
	 */
	function execute() {

		if (isset($this->userId)) {
			import('lib.pkp.classes.security.UserGroupAssignmentDAO');
			$userGroupAssignmentDao = DAORegistry::getDAO('UserGroupAssignmentDAO');
			$userGroupAssignmentDao->deleteAssignmentsByContextId(Application::getRequest()->getContext()->getId(), $this->userId);
			if ($this->getData('userGroupIds')) {
				$userGroupDao = DAORegistry::getDAO('UserGroupDAO');
				foreach ($this->getData('userGroupIds') as $userGroupId) {
					$userGroupDao->assignUserToGroup($this->userId, $userGroupId);
				}
			}
		}

		parent::execute();
	}

}


