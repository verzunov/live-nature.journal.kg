<?php
/* Smarty version 3.1.33, created on 2019-07-08 18:52:35
  from 'core:controllerstabsettingsrev' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2390f3063e81_17388528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa5c18ab87290f97943a10386089ab1f62d7c17' => 
    array (
      0 => 'core:controllerstabsettingsrev',
      1 => 1559234240,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/tab/settings/wizardMode.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5d2390f3063e81_17388528 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"workflow-review",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#reviewStageForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="reviewStageForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.PublicationSettingsTabHandler",'op'=>"saveFormData",'tab'=>"reviewStage"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"reviewStageFormNotification"), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/tab/settings/wizardMode.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('wizardMode'=>$_smarty_tpl->tpl_vars['wizardMode']->value), 0, false);
?>


		<?php if ($_smarty_tpl->tpl_vars['wizardMode']->value) {?>
		<?php $_smarty_tpl->_assignInScope('wizardClass', "is_wizard_mode");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('wizardClass', '');?>
	<?php }?>

	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reviewOptions",'title'=>"manager.setup.reviewOptions.reviewTime",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"reviewOptions",'title'=>"manager.setup.reviewOptions.reviewTime",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<!-- FIXME: also, fbvStyles.size.SMALL needs to be switched to TINY once there's a TINY option available -->
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.setup.reviewOptions.noteOnModification"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('description'=>"manager.setup.reviewOptions.noteOnModification"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"manager.setup.reviewOptions.numWeeksPerResponse",'name'=>"numWeeksPerResponse",'id'=>"numWeeksPerResponse",'value'=>$_smarty_tpl->tpl_vars['numWeeksPerResponse']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"manager.setup.reviewOptions.numWeeksPerReview",'name'=>"numWeeksPerReview",'id'=>"numWeeksPerReview",'value'=>$_smarty_tpl->tpl_vars['numWeeksPerReview']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('description'=>"manager.setup.reviewOptions.noteOnModification"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.reviewOptions.automatedReminders",'description'=>"manager.setup.reviewOptions.automatedRemindersDisabled"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.reviewOptions.automatedReminders",'description'=>"manager.setup.reviewOptions.automatedRemindersDisabled"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.reviewOptions.automatedReminders",'description'=>"manager.setup.reviewOptions.automatedRemindersDisabled"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "reminderDefault", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.reviewOptions.neverSendReminder"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.setup.reviewOptions.remindForInvite"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('description'=>"manager.setup.reviewOptions.remindForInvite"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['scheduledTasksDisabled']->value) {
$_smarty_tpl->_assignInScope('disabled', true);
} else {
$_smarty_tpl->_assignInScope('disabled', false);
}?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'from'=>$_smarty_tpl->tpl_vars['numDaysBeforeInviteReminderValues']->value,'selected'=>$_smarty_tpl->tpl_vars['numDaysBeforeInviteReminder']->value,'defaultValue'=>'','defaultLabel'=>$_smarty_tpl->tpl_vars['reminderDefault']->value,'id'=>"numDaysBeforeInviteReminder",'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('description'=>"manager.setup.reviewOptions.remindForInvite"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('description'=>"manager.setup.reviewOptions.remindForSubmit"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('description'=>"manager.setup.reviewOptions.remindForSubmit"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['scheduledTasksDisabled']->value) {
$_smarty_tpl->_assignInScope('disabled', true);
} else {
$_smarty_tpl->_assignInScope('disabled', false);
}?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'from'=>$_smarty_tpl->tpl_vars['numDaysBeforeSubmitReminderValues']->value,'selected'=>$_smarty_tpl->tpl_vars['numDaysBeforeSubmitReminder']->value,'defaultValue'=>'','defaultLabel'=>$_smarty_tpl->tpl_vars['reminderDefault']->value,'id'=>"numDaysBeforeSubmitReminder",'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value,'translate'=>false,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('description'=>"manager.setup.reviewOptions.remindForSubmit"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"reviewOptions",'title'=>"manager.setup.reviewOptions.reviewTime",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'reviewFormsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.reviewForms.ReviewFormGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"reviewFormGridContainer",'url'=>$_smarty_tpl->tpl_vars['reviewFormsUrl']->value),$_smarty_tpl ) );?>


	<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reviewProcessDetails",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"reviewProcessDetails",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "ensureLink", null);
$_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['ensuringLink']->value,'contextId'=>"uploadForm"), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"showEnsuringLink",'label'=>"manager.setup.reviewOptions.blindReview",'list'=>true));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('for'=>"showEnsuringLink",'label'=>"manager.setup.reviewOptions.blindReview",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"showEnsuringLink",'value'=>"1",'checked'=>$_smarty_tpl->tpl_vars['showEnsuringLink']->value,'label'=>$_smarty_tpl->tpl_vars['ensureLink']->value,'translate'=>false,'keepLabelHtml'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('for'=>"showEnsuringLink",'label'=>"manager.setup.reviewOptions.blindReview",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"reviewProcessDetails",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"review",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"review",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.competingInterests",'for'=>"competingInterests",'description'=>"manager.setup.competingInterestsDescription"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('label'=>"manager.setup.competingInterests",'for'=>"competingInterests",'description'=>"manager.setup.competingInterestsDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'id'=>"competingInterests",'value'=>$_smarty_tpl->tpl_vars['competingInterests']->value,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('label'=>"manager.setup.competingInterests",'for'=>"competingInterests",'description'=>"manager.setup.competingInterestsDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin11 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin11, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"reviewerCompetingInterestsRequired",'list'=>true,'label'=>"manager.setup.reviewerCompetingInterestsRequired.description"));
$_block_repeat=true;
echo $_block_plugin11->smartyFBVFormSection(array('for'=>"reviewerCompetingInterestsRequired",'list'=>true,'label'=>"manager.setup.reviewerCompetingInterestsRequired.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"reviewerCompetingInterestsRequired",'checked'=>$_smarty_tpl->tpl_vars['reviewerCompetingInterestsRequired']->value,'label'=>"manager.setup.competingInterests.required",'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin11->smartyFBVFormSection(array('for'=>"reviewerCompetingInterestsRequired",'list'=>true,'label'=>"manager.setup.reviewerCompetingInterestsRequired.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php echo $_smarty_tpl->tpl_vars['additionalReviewFormContents']->value;?>


		<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.reviewGuidelines",'for'=>"reviewGuidelines",'description'=>"manager.setup.reviewGuidelinesDescription"));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormSection(array('label'=>"manager.setup.reviewGuidelines",'for'=>"reviewGuidelines",'description'=>"manager.setup.reviewGuidelinesDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'name'=>"reviewGuidelines",'id'=>"reviewGuidelines",'value'=>$_smarty_tpl->tpl_vars['reviewGuidelines']->value,'rich'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormSection(array('label'=>"manager.setup.reviewGuidelines",'for'=>"reviewGuidelines",'description'=>"manager.setup.reviewGuidelinesDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"review",'class'=>$_smarty_tpl->tpl_vars['wizardClass']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"reviewOptions",'title'=>"manager.setup.reviewOptions"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormArea(array('id'=>"reviewOptions",'title'=>"manager.setup.reviewOptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_block_plugin14 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin14, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin14->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'from'=>$_smarty_tpl->tpl_vars['reviewMethodOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['defaultReviewMode']->value,'id'=>"defaultReviewMode",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin14->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php echo $_smarty_tpl->tpl_vars['additionalReviewFormOptions']->value;?>

	<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormArea(array('id'=>"reviewOptions",'title'=>"manager.setup.reviewOptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php if (!$_smarty_tpl->tpl_vars['wizardMode']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"reviewStageFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
