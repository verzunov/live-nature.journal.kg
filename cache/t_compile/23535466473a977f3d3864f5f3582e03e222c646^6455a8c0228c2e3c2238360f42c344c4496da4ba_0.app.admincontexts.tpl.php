<?php
/* Smarty version 3.1.33, created on 2019-07-08 18:45:06
  from 'app:admincontexts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d238f32078c65_99295400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6455a8c0228c2e3c2238360f42c344c4496da4ba' => 
    array (
      0 => 'app:admincontexts.tpl',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5d238f32078c65_99295400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "journal.journals");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Initialise JS handler.
	$(function() {
		$('#contexts').pkpHandler(
				'$.pkp.pages.admin.ContextsHandler');
	});
<?php echo '</script'; ?>
>

<div class="pkp_page_content pkp_page_admin">

	<div id="contexts">
		<?php if ($_smarty_tpl->tpl_vars['openWizardLinkAction']->value) {?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['openWizardLinkAction']->value->getId();?>
" class="pkp_linkActions inline">
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['openWizardLinkAction']->value,'contextId'=>"contexts",'selfActivate'=>true), 0, false);
?>
			</div>
		<?php }?>

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'journalsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.admin.journal.JournalGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"journalGridContainer",'url'=>$_smarty_tpl->tpl_vars['journalsUrl']->value),$_smarty_tpl ) );?>

	</div>

</div><!-- .pkp_page_content -->

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
