<?php
/* Smarty version 3.1.33, created on 2019-07-08 18:52:42
  from 'app:controllerstabsettingsema' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2390fa131428_70887523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0383c7a176130448968b5acf326013d021abd422' => 
    array (
      0 => 'app:controllerstabsettingsema',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_5d2390fa131428_70887523 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"workflow-emails",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#emailTemplatesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="emailTemplatesForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.settings.PublicationSettingsTabHandler",'op'=>"saveFormData",'tab'=>"emailTemplates"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"emailTemplatesFormNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.emailSignature",'for'=>"emailSignature",'description'=>"manager.setup.emailSignatureDescription"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.setup.emailSignature",'for'=>"emailSignature",'description'=>"manager.setup.emailSignatureDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'id'=>"emailSignature",'value'=>$_smarty_tpl->tpl_vars['emailSignature']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'rich'=>true,'variables'=>$_smarty_tpl->tpl_vars['emailVariables']->value),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.setup.emailSignature",'for'=>"emailSignature",'description'=>"manager.setup.emailSignatureDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.emailBounceAddress",'for'=>"envelopeSender",'description'=>"manager.setup.emailBounceAddressDescription"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"manager.setup.emailBounceAddress",'for'=>"envelopeSender",'description'=>"manager.setup.emailBounceAddressDescription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<!-- FIXME: There may be a better way to do this if statement within the fbvElement itself -->
		<?php if ($_smarty_tpl->tpl_vars['envelopeSenderDisabled']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"envelopeSender",'value'=>$_smarty_tpl->tpl_vars['envelopeSender']->value,'maxlength'=>"90",'disabled'=>$_smarty_tpl->tpl_vars['envelopeSenderDisabled']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'label'=>"manager.setup.emailBounceAddressDisabled"),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"envelopeSender",'value'=>$_smarty_tpl->tpl_vars['envelopeSender']->value,'maxlength'=>"90",'disabled'=>$_smarty_tpl->tpl_vars['envelopeSenderDisabled']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE']),$_smarty_tpl ) );?>

		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"manager.setup.emailBounceAddress",'for'=>"envelopeSender",'description'=>"manager.setup.emailBounceAddressDescription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'preparedEmailsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.preparedEmails.preparedEmailsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"preparedEmailsGridDiv",'url'=>$_smarty_tpl->tpl_vars['preparedEmailsGridUrl']->value),$_smarty_tpl ) );?>


	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"emailTemplatesFormSubmit",'submitText'=>"common.save",'hideCancel'=>true),$_smarty_tpl ) );?>

</form>
<?php }
}
