<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:30:36
  from 'core:submissionsubmissionLocal' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24186c767623_51099731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4c4278a313730c57d2523769c71cdca0d5d9b7' => 
    array (
      0 => 'core:submissionsubmissionLocal',
      1 => 1559234240,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24186c767623_51099731 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['supportedSubmissionLocaleNames']->value) == 1) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supportedSubmissionLocaleNames']->value, 'localeName', false, 'locale');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'id'=>"locale",'value'=>$_smarty_tpl->tpl_vars['locale']->value),$_smarty_tpl ) );?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
		<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.submit.submissionLocale",'for'=>"locale"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"submission.submit.submissionLocale",'for'=>"locale"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('label'=>"submission.submit.submissionLocaleDescription",'required'=>"true",'type'=>"select",'id'=>"locale",'from'=>$_smarty_tpl->tpl_vars['supportedSubmissionLocaleNames']->value,'selected'=>$_smarty_tpl->tpl_vars['locale']->value,'translate'=>false,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('title'=>"submission.submit.submissionLocale",'for'=>"locale"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
