<?php

/**
 * @file controllers/modals/submissionMetadata/form/PKPSubmissionMetadataViewForm.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPSubmissionMetadataViewForm
 * @ingroup controllers_modals_submissionMetadata_form_SubmissionMetadataViewForm
 *
 * @brief Displays a submission's metadata view.
 */

import('lib.pkp.classes.form.Form');

// Use this class to handle the submission metadata.
import('classes.submission.SubmissionMetadataFormImplementation');

class PKPSubmissionMetadataViewForm extends Form {

	/** The submission used to show metadata information **/
	var $_submission;

	/** The current stage id **/
	var $_stageId;

	/**
	 * Parameters to configure the form template.
	 */
	var $_formParams;

	/** @var SubmissionMetadataFormImplementation */
	var $_metadataFormImplem;

	/**
	 * Constructor.
	 * @param $submissionId integer
	 * @param $stageId integer
	 * @param $formParams array
	 */
	function __construct($submissionId, $stageId = null, $formParams = null, $templateName = 'controllers/modals/submissionMetadata/form/submissionMetadataViewForm.tpl') {
		parent::__construct($templateName);

		$submissionDao = Application::getSubmissionDAO();
		$submission = $submissionDao->getById((int) $submissionId);
		if ($submission) {
			$this->_submission = $submission;
		}

		$this->_stageId = $stageId;

		$this->_formParams = $formParams;

		$this->_metadataFormImplem = new SubmissionMetadataFormImplementation($this);

		$this->setDefaultFormLocale($submission->getLocale());

		// Validation checks for this form
		$this->_metadataFormImplem->addChecks($submission);
		$this->addCheck(new FormValidatorPost($this));
		$this->addCheck(new FormValidatorCSRF($this));
	}

	//
	// Getters and Setters
	//
	/**
	 * Get the Submission
	 * @return Submission
	 */
	function getSubmission() {
		return $this->_submission;
	}

	/**
	 * Get the Stage Id
	 * @return int
	 */
	function getStageId() {
		return $this->_stageId;
	}

	/**
	 * Get the extra form parameters.
	 */
	function getFormParams() {
		return $this->_formParams;
	}


	//
	// Overridden template methods
	//
	/**
	 * Get the names of fields for which data should be localized
	 * @return array
	 */
	function getLocaleFieldNames() {
		$this->_metadataFormImplem->getLocaleFieldNames();
	}

	/**
	 * Initialize form data with the author name and the submission id.
	 */
	function initData() {
		AppLocale::requireComponents(
			LOCALE_COMPONENT_APP_COMMON,
			LOCALE_COMPONENT_PKP_SUBMISSION,
			LOCALE_COMPONENT_APP_SUBMISSION
		);

		$this->_metadataFormImplem->initData($this->getSubmission());
		parent::initData();
	}

	/**
	 * Fetch the HTML contents of the form.
	 * @see Form::fetch
	 */
	function fetch($request, $template = null, $display = false) {
		$submission = $this->getSubmission();
		$templateMgr = TemplateManager::getManager($request);
		$templateMgr->assign(array(
			'submissionId' =>$submission->getId(),
			'stageId' => $this->getStageId(),
			'formParams' => $this->getFormParams(),
		));

		// Tell the form what fields are enabled (and which of those are required)
		import('lib.pkp.controllers.grid.settings.metadata.MetadataGridHandler');
		$context = $request->getContext();
		foreach (array_keys(MetadataGridHandler::getNames()) as $field) {
			$templateMgr->assign(array(
				$field . 'Enabled' => $context->getSetting($field . 'EnabledWorkflow'),
				$field . 'Required' => $context->getSetting($field . 'Required')
			));
		}
		// Provide available submission languages. (Convert the array
		// of locale symbolic names xx_XX into an associative array
		// of symbolic names => readable names.)
		$supportedSubmissionLocales = $context->getSetting('supportedSubmissionLocales');
		if (empty($supportedSubmissionLocales)) $supportedSubmissionLocales = array($context->getPrimaryLocale());
		$templateMgr->assign(
			'supportedSubmissionLocaleNames',
			array_flip(array_intersect(
				array_flip(AppLocale::getAllLocales()),
				$supportedSubmissionLocales
			))
		);

		// Get assigned categories
		// We need an array of IDs for the SelectListPanel, but we also need an
		// array of Category objects to use when the metadata form is viewed in
		// readOnly mode. This mode is invoked on the SubmissionMetadataHandler
		// is not available here
		$submissionDao = Application::getSubmissionDAO();
		$categories = $submissionDao->getCategories($submission->getId(), $submission->getContextId());
		$assignedCategories = array();
		$selectedIds = array();
		while ($category = $categories->next()) {
			$assignedCategories[] = $category;
			$selectedIds[] = $category->getId();
		}

		// Get SelectCategoryListHandler data
		import('lib.pkp.controllers.list.SelectCategoryListHandler');
		$selectCategoryList = new SelectCategoryListHandler(array(
			'title' => 'submission.submit.placement.categories',
			'inputName' => 'categories[]',
			'selected' => $selectedIds,
			'getParams' => array(
				'contextId' => $submission->getContextId(),
			),
		));

		$selectCategoryListData = $selectCategoryList->getConfig();

		$templateMgr->assign(array(
			'hasCategories' => !empty($selectCategoryListData['items']),
			'selectCategoryListData' => json_encode($selectCategoryListData),
			'assignedCategories' => $assignedCategories,
		));

		return parent::fetch($request, $template, $display);
	}

	/**
	 * Assign form data to user-submitted data.
	 */
	function readInputData() {
		$this->_metadataFormImplem->readInputData();
	}

	/**
	 * Save changes to submission.
	 */
	function execute() {
		$submission = $this->getSubmission();
		parent::execute();
		// Execute submission metadata related operations.
		$this->_metadataFormImplem->execute($submission, Application::getRequest());
	}

}


