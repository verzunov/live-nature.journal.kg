<?php
/* Smarty version 3.1.33, created on 2019-07-08 08:20:03
  from 'app:controllerstabsettingsjou' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22fcb31ad4e0_13351685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b590b149cf2be072d4972297de5371b84ef9a605' => 
    array (
      0 => 'app:controllerstabsettingsjou',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d22fcb31ad4e0_13351685 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'sectionsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.sections.SectionGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"sectionsGridContainer",'url'=>$_smarty_tpl->tpl_vars['sectionsGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
