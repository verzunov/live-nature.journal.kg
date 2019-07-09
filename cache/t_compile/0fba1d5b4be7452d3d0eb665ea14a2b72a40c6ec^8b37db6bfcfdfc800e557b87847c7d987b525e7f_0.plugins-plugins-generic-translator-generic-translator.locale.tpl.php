<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:34:49
  from 'plugins-plugins-generic-translator-generic-translator:locale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2435893289a2_55068136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b37db6bfcfdfc800e557b87847c7d987b525e7f' => 
    array (
      0 => 'plugins-plugins-generic-translator-generic-translator:locale.tpl',
      1 => 1562653988,
      2 => 'plugins-plugins-generic-translator-generic-translator',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2435893289a2_55068136 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('templateId', uniqid(''));?>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.translator.localeDescription"),$_smarty_tpl ) );?>
</p>

<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.translator.jumpTo"),$_smarty_tpl ) );?>
</h3>
<ul>
	<li><a href="#localeFiles-<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.translator.localeFiles"),$_smarty_tpl ) );?>
</a>
	<li><a href="#miscFiles-<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.translator.miscFiles"),$_smarty_tpl ) );?>
</a>
	<li><a href="#emails-<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.translator.emails"),$_smarty_tpl ) );?>
</a>
</ul>

<a name="localeFiles-<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
"></a>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'localeFileGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"plugins.generic.translator.controllers.grid.LocaleFileGridHandler",'op'=>"fetchGrid",'locale'=>$_smarty_tpl->tpl_vars['locale']->value,'tabsSelector'=>$_smarty_tpl->tpl_vars['tabsSelector']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "localeFileGridContainer-",$_smarty_tpl->tpl_vars['templateId']->value )),'url'=>$_smarty_tpl->tpl_vars['localeFileGridUrl']->value),$_smarty_tpl ) );?>


<a name="miscFiles-<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
"></a>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'miscFileGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"plugins.generic.translator.controllers.grid.MiscTranslationFileGridHandler",'op'=>"fetchGrid",'locale'=>$_smarty_tpl->tpl_vars['locale']->value,'tabsSelector'=>$_smarty_tpl->tpl_vars['tabsSelector']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "miscFileGridContainer-",$_smarty_tpl->tpl_vars['templateId']->value )),'url'=>$_smarty_tpl->tpl_vars['miscFileGridUrl']->value),$_smarty_tpl ) );?>


<a name="emails-<?php echo $_smarty_tpl->tpl_vars['templateId']->value;?>
"></a>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'emailGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"plugins.generic.translator.controllers.grid.EmailGridHandler",'op'=>"fetchGrid",'locale'=>$_smarty_tpl->tpl_vars['locale']->value,'tabsSelector'=>$_smarty_tpl->tpl_vars['tabsSelector']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "emailGridContainer-",$_smarty_tpl->tpl_vars['templateId']->value )),'url'=>$_smarty_tpl->tpl_vars['emailGridUrl']->value),$_smarty_tpl ) );?>


</table>
<?php }
}
