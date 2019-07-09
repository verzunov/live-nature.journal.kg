<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:35:07
  from 'plugins-plugins-generic-translator-generic-translator:localeFile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24359b4d2cd2_44346788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8030c4c4b6520edb8bbd8dd07e65ef6f326962ef' => 
    array (
      0 => 'plugins-plugins-generic-translator-generic-translator:localeFile.tpl',
      1 => 1562653988,
      2 => 'plugins-plugins-generic-translator-generic-translator',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24359b4d2cd2_44346788 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('saveFormId', uniqid("saveLocaleFile"));
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#<?php echo $_smarty_tpl->tpl_vars['saveFormId']->value;?>
').pkpHandler('$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
<?php echo '</script'; ?>
>
<form id="<?php echo $_smarty_tpl->tpl_vars['saveFormId']->value;?>
" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"save",'locale'=>$_smarty_tpl->tpl_vars['locale']->value,'filename'=>$_smarty_tpl->tpl_vars['filename']->value),$_smarty_tpl ) );?>
" method="post" class="pkp_form">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<input type="hidden" name="localeKeys" />

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'localeFileListbuilderUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"plugins.generic.translator.controllers.listbuilder.LocaleFileListbuilderHandler",'op'=>"fetchGrid",'locale'=>$_smarty_tpl->tpl_vars['locale']->value,'tabsSelector'=>$_smarty_tpl->tpl_vars['tabsSelector']->value,'filename'=>$_smarty_tpl->tpl_vars['filename']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>uniqid("localeFileListbuilderContainer"),'url'=>$_smarty_tpl->tpl_vars['localeFileListbuilderUrl']->value),$_smarty_tpl ) );?>


		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"submit",'class'=>"submitFormButton",'id'=>uniqid("submitFormButton-"),'label'=>"common.save"),$_smarty_tpl ) );?>

</form>
<?php }
}
