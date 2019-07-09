<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:57:17
  from 'app:controllersinformationCen' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241eada565a1_01301372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9300c68e55206835b7bbc33b02ad50a94877ae5' => 
    array (
      0 => 'app:controllersinformationCen',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d241eada565a1_01301372 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the Information Center handler.
	$(function() {
		$('#informationCenter').pkpHandler(
			'$.pkp.controllers.TabHandler', {
				selected: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectedTabIndex']->value,"javascript" ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<div id="informationCenter" class="pkp_controllers_informationCenter pkp_controllers_tab">
	<ul>
		<?php if (!$_smarty_tpl->tpl_vars['removeHistoryTab']->value) {?>
			<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"viewHistory",'params'=>$_smarty_tpl->tpl_vars['linkParams']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.informationCenter.history"),$_smarty_tpl ) );?>
</a></li>
		<?php }?>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"viewNotes",'params'=>$_smarty_tpl->tpl_vars['linkParams']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.informationCenter.notes"),$_smarty_tpl ) );?>
</a></li>
	</ul>
</div>
<?php }
}
