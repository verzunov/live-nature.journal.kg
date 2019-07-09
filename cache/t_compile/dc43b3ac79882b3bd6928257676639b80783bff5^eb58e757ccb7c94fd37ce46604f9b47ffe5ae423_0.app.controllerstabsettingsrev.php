<?php
/* Smarty version 3.1.33, created on 2019-07-08 18:52:34
  from 'app:controllerstabsettingsrev' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2390f2e62d21_39398651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb58e757ccb7c94fd37ce46604f9b47ffe5ae423' => 
    array (
      0 => 'app:controllerstabsettingsrev',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl' => 1,
  ),
),false)) {
function content_5d2390f2e62d21_39398651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "additionalReviewFormOptions", null);?>
	
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.reviewOptions.reviewerAccess",'for'=>"notAnId",'description'=>"manager.setup.reviewOptions.reviewerAccessKeysEnabled.description",'list'=>true));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.setup.reviewOptions.reviewerAccess",'for'=>"notAnId",'description'=>"manager.setup.reviewOptions.reviewerAccessKeysEnabled.description",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"reviewerAccessKeysEnabled",'checked'=>$_smarty_tpl->tpl_vars['reviewerAccessKeysEnabled']->value,'label'=>"manager.setup.reviewOptions.reviewerAccessKeysEnabled"),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"restrictReviewerFileAccess",'checked'=>$_smarty_tpl->tpl_vars['restrictReviewerFileAccess']->value,'label'=>"manager.setup.reviewOptions.restrictReviewerFileAccess"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"manager.setup.reviewOptions.reviewerAccess",'for'=>"notAnId",'description'=>"manager.setup.reviewOptions.reviewerAccessKeysEnabled.description",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("core:controllers/tab/settings/reviewStage/form/reviewStageForm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
