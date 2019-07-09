<?php
/* Smarty version 3.1.33, created on 2019-07-08 18:52:36
  from 'app:controllerstabsettingslib' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2390f46a3188_29852784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78ea157e77e6a8ed70d21c4fbbfbc5b126a18236' => 
    array (
      0 => 'app:controllerstabsettingslib',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2390f46a3188_29852784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('helpClass', "pkp_help_tab");
if ($_smarty_tpl->tpl_vars['isModal']->value) {?>
    <?php $_smarty_tpl->_assignInScope('helpClass', "pkp_help_modal");
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"workflow-library",'class'=>$_smarty_tpl->tpl_vars['helpClass']->value),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'libraryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.library.LibraryFileAdminGridHandler",'op'=>"fetchGrid",'canEdit'=>$_smarty_tpl->tpl_vars['canEdit']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"libraryGridDiv",'url'=>$_smarty_tpl->tpl_vars['libraryGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
