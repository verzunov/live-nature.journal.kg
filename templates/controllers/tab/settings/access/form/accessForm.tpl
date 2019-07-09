{**
 * controllers/tab/settings/access/form/accessForm.tpl
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Access options form.
 *
 *}

<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#accessForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form class="pkp_form" id="accessForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT component="tab.settings.DistributionSettingsTabHandler" op="saveFormData" tab="access"}">
	{csrf}
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="accessFormNotification"}

	{fbvFormArea id="userRegistration" title="manager.setup.onlineAccessManagement"}
		<p>{translate key="manager.setup.securitySettingsDescription"}</p>
		{fbvFormSection list=true}
			{fbvElement type="radio" id="publishingMode-0" name="publishingMode" value=$smarty.const.PUBLISHING_MODE_OPEN checked=$publishingMode|compare:$smarty.const.PUBLISHING_MODE_OPEN label="manager.setup.openAccess"}
			{fbvElement type="radio" id="publishingMode-1" name="publishingMode" value=$smarty.const.PUBLISHING_MODE_SUBSCRIPTION checked=$publishingMode|compare:$smarty.const.PUBLISHING_MODE_SUBSCRIPTION label="manager.setup.subscription"}
			{fbvElement type="radio" id="publishingMode-2" name="publishingMode" value=$smarty.const.PUBLISHING_MODE_NONE checked=$publishingMode|compare:$smarty.const.PUBLISHING_MODE_NONE label="manager.setup.noPublishing"}
			{fbvElement type="checkbox" id="enableOai" name="enableOai" value=1 checked=$enableOai label="manager.setup.enableOai"}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormButtons submitText="common.save" hideCancel=true}
</form>
