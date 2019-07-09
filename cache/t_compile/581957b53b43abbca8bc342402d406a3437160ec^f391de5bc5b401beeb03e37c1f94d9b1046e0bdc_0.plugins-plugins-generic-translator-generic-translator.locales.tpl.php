<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:34:14
  from 'plugins-plugins-generic-translator-generic-translator:locales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d243566d35586_90966189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f391de5bc5b401beeb03e37c1f94d9b1046e0bdc' => 
    array (
      0 => 'plugins-plugins-generic-translator-generic-translator:locales.tpl',
      1 => 1562653988,
      2 => 'plugins-plugins-generic-translator-generic-translator',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d243566d35586_90966189 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#translationTabs').pkpHandler('$.pkp.controllers.TabHandler', {
			notScrollable: true
		});
	});
<?php echo '</script'; ?>
>

<div id="translationTabs" class="pkp_controllers_tab">
	<ul>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"plugins.generic.translator.controllers.grid.LocaleGridHandler",'op'=>"fetchGrid",'escape'=>false,'tabsSelector'=>"#translationTabs"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.translator.availableLocales"),$_smarty_tpl ) );?>
</a></li>
	</ul>
</div>
<?php }
}
