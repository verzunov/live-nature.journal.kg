<?php
/* Smarty version 3.1.33, created on 2019-07-08 06:14:24
  from 'app:formformArea.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22df40cf2e78_21790160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '837c6c12ddb03945635b98483217b32322c630f4' => 
    array (
      0 => 'app:formformArea.tpl',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d22df40cf2e78_21790160 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset <?php if ($_smarty_tpl->tpl_vars['FBV_id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['FBV_id']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="pkp_formArea <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['FBV_title']->value) {?>
		<legend><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_title']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_title']->value;
}?></legend>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['FBV_content']->value;?>

</fieldset>
<?php }
}
