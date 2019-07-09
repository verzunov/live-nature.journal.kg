<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:35:08
  from 'app:controllerslistbuilderlis' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24359c4d1d09_50667089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c353f052c72fc606647669b750d28922e2895a3d' => 
    array (
      0 => 'app:controllerslistbuilderlis',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/listbuilder/listbuilderOptions.tpl' => 1,
    'app:controllers/grid/gridHeader.tpl' => 1,
    'app:controllers/listbuilder/listbuilderTable.tpl' => 1,
    'app:controllers/grid/gridOrderFinishControls.tpl' => 1,
  ),
),false)) {
function content_5d24359c4d1d09_50667089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('staticId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "component-",$_smarty_tpl->tpl_vars['grid']->value->getId() )));
$_smarty_tpl->_assignInScope('gridId', uniqid(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticId']->value,'-' ))));
$_smarty_tpl->_assignInScope('gridTableId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value,"-table" )));
$_smarty_tpl->_assignInScope('gridActOnId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridTableId']->value,">tbody:first" )));?>

<?php echo '<script'; ?>
>
	$(function() {
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value ));?>
').pkpHandler(
			'$.pkp.controllers.listbuilder.ListbuilderHandler',
			{
				<?php $_smarty_tpl->_subTemplateRender("app:controllers/listbuilder/listbuilderOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			}
		);
	});
<?php echo '</script'; ?>
>


<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value ));?>
" class="pkp_controllers_grid pkp_controllers_listbuilder formWidget">

		<input disabled="disabled" type="hidden" class="deletions" />

	<div class="wrapper">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/listbuilder/listbuilderTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php if ($_smarty_tpl->tpl_vars['hasOrderLink']->value) {?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/grid/gridOrderFinishControls.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('gridId'=>$_smarty_tpl->tpl_vars['staticId']->value), 0, false);
?>
		<?php }?>
	</div>
</div>
<?php }
}
