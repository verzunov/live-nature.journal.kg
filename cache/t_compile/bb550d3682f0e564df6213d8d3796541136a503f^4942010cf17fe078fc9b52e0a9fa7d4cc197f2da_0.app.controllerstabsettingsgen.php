<?php
/* Smarty version 3.1.33, created on 2019-07-08 18:52:23
  from 'app:controllerstabsettingsgen' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2390e78eb5f7_91575944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4942010cf17fe078fc9b52e0a9fa7d4cc197f2da' => 
    array (
      0 => 'app:controllerstabsettingsgen',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2390e78eb5f7_91575944 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings.md",'section'=>"workflow-components",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>


<div class="genres">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'genresUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.settings.genre.GenreGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"genresContainer",'url'=>$_smarty_tpl->tpl_vars['genresUrl']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
