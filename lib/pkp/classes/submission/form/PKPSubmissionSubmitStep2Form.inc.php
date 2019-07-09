<?php

/**
 * @file classes/submission/form/PKPSubmissionSubmitStep2Form.inc.php
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPSubmissionSubmitStep2Form
 * @ingroup submission_form
 *
 * @brief Form for Step 2 of author submission: file upload
 */

import('lib.pkp.classes.submission.form.SubmissionSubmitForm');

class PKPSubmissionSubmitStep2Form extends SubmissionSubmitForm {
	/**
	 * Constructor.
	 * @param $context Context
	 * @param $submission Submission
	 */
	function __construct($context, $submission) {
		parent::__construct($context, $submission, 2);
	}

	/**
	 * Save changes to submission.
	 * @return int the submission ID
	 */
	function execute() {
		// Update submission
		$submissionDao = Application::getSubmissionDAO();
		$submission = $this->submission;

		if ($submission->getSubmissionProgress() <= $this->step) {
			$submission->stampStatusModified();
			$submission->setSubmissionProgress($this->step + 1);
			$submissionDao->updateObject($submission);
		}

		return $this->submissionId;
	}
}


