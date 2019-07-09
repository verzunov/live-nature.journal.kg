<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:46:45
  from 'core:submissionsubmissionMetad' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241c35053a36_29872614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88c170bcbb63e97d8f67de227fbc9022bb48ed0c' => 
    array (
      0 => 'core:submissionsubmissionMetad',
      1 => 1559234240,
      2 => 'core',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d241c35053a36_29872614 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_helpers_clear">
	<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.prefix",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"title",'title'=>"common.prefix",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('label'=>"common.prefixAndTitle.tip",'type'=>"text",'multilingual'=>true,'name'=>"prefix",'id'=>"prefix",'value'=>$_smarty_tpl->tpl_vars['prefix']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value,'maxlength'=>"32"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('for'=>"title",'title'=>"common.prefix",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"title",'title'=>"common.title",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('for'=>"title",'title'=>"common.title",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"title",'id'=>"title",'value'=>$_smarty_tpl->tpl_vars['title']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value,'maxlength'=>"255",'required'=>true),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('for'=>"title",'title'=>"common.title",'inline'=>"true",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['LARGE'],'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>
<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.subtitle",'for'=>"subtitle"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"common.subtitle",'for'=>"subtitle"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>true,'name'=>"subtitle",'id'=>"subtitle",'value'=>$_smarty_tpl->tpl_vars['subtitle']->value,'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"common.subtitle",'for'=>"subtitle"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.abstract",'for'=>"abstract",'required'=>$_smarty_tpl->tpl_vars['abstractsRequired']->value));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"common.abstract",'for'=>"abstract",'required'=>$_smarty_tpl->tpl_vars['abstractsRequired']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['wordCount']->value) {?>
		<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.abstract.wordCount.description",'wordCount'=>$_smarty_tpl->tpl_vars['wordCount']->value),$_smarty_tpl ) );?>

	<?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>true,'name'=>"abstract",'id'=>"abstract",'value'=>$_smarty_tpl->tpl_vars['abstract']->value,'rich'=>"extended",'readonly'=>$_smarty_tpl->tpl_vars['readOnly']->value,'wordCount'=>$_smarty_tpl->tpl_vars['wordCount']->value),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"common.abstract",'for'=>"abstract",'required'=>$_smarty_tpl->tpl_vars['abstractsRequired']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
