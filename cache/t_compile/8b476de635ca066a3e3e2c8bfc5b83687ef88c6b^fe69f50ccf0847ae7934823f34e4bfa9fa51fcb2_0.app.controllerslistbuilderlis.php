<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:35:08
  from 'app:controllerslistbuilderlis' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24359c523421_41429337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe69f50ccf0847ae7934823f34e4bfa9fa51fcb2' => 
    array (
      0 => 'app:controllerslistbuilderlis',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/grid/feature/featuresOptions.tpl' => 1,
  ),
),false)) {
function content_5d24359c523421_41429337 (Smarty_Internal_Template $_smarty_tpl) {
?>

gridId: <?php echo json_encode($_smarty_tpl->tpl_vars['grid']->value->getId());?>
,
fetchRowUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'fetchRow','params'=>$_smarty_tpl->tpl_vars['gridRequestArgs']->value,'escape'=>false),$_smarty_tpl ) ));?>
,
fetchOptionsUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'fetchOptions','params'=>$_smarty_tpl->tpl_vars['gridRequestArgs']->value,'escape'=>false),$_smarty_tpl ) ));?>
,
availableOptions: <?php echo json_encode($_smarty_tpl->tpl_vars['availableOptions']->value);?>
,
<?php if ($_smarty_tpl->tpl_vars['grid']->value->getSaveType() == @constant('LISTBUILDER_SAVE_TYPE_INTERNAL')) {?>
	saveUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>'save','params'=>$_smarty_tpl->tpl_vars['gridRequestArgs']->value,'escape'=>false),$_smarty_tpl ) ));?>
,
	saveFieldName: null,
<?php } else { ?>	saveUrl: null,
	saveFieldName: <?php echo json_encode($_smarty_tpl->tpl_vars['grid']->value->getSaveFieldName());?>
,
<?php }?>
sourceType: <?php echo json_encode($_smarty_tpl->tpl_vars['grid']->value->getSourceType());?>
,
bodySelector: '#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridActOnId']->value,'javascript' ));?>
',
features: <?php $_smarty_tpl->_subTemplateRender('app:controllers/grid/feature/featuresOptions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>$_smarty_tpl->tpl_vars['features']->value), 0, false);
?>,
<?php }
}
