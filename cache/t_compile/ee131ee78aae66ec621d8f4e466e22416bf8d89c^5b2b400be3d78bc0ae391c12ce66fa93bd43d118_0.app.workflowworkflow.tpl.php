<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:41:25
  from 'app:workflowworkflow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241af5ee85b5_01395325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2b400be3d78bc0ae391c12ce66fa93bd43d118' => 
    array (
      0 => 'app:workflowworkflow.tpl',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5d241af5ee85b5_01395325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('primaryAuthor', $_smarty_tpl->tpl_vars['submission']->value->getPrimaryAuthor());
if (!$_smarty_tpl->tpl_vars['primaryAuthor']->value) {
$_smarty_tpl->_assignInScope('authors', $_smarty_tpl->tpl_vars['submission']->value->getAuthors());
$_smarty_tpl->_assignInScope('primaryAuthor', $_smarty_tpl->tpl_vars['authors']->value[0]);
}
$_smarty_tpl->_assignInScope('submissionTitleSafe', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['submission']->value->getLocalizedTitle() )));
if ($_smarty_tpl->tpl_vars['primaryAuthor']->value) {
$_smarty_tpl->_assignInScope('pageTitleTranslated', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( $_smarty_tpl->tpl_vars['primaryAuthor']->value->getFullName(),", ",$_smarty_tpl->tpl_vars['submissionTitleSafe']->value )));
} else {
$_smarty_tpl->_assignInScope('pageTitleTranslated', $_smarty_tpl->tpl_vars['submissionTitleSafe']->value);
}
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('suppressPageTitle'=>true), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Initialize JS handler.
	$(function() {
		$('#submissionWorkflow').pkpHandler(
			'$.pkp.pages.workflow.WorkflowHandler'
		);
	});
<?php echo '</script'; ?>
>

<div id="submissionWorkflow" class="pkp_submission_workflow">

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionHeaderUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"submissionHeader",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'contextId'=>"submission",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionHeaderDiv",'url'=>$_smarty_tpl->tpl_vars['submissionHeaderUrl']->value,'class'=>"pkp_page_header"),$_smarty_tpl ) );?>


	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"workflowNotification",'requestOptions'=>$_smarty_tpl->tpl_vars['workflowNotificationRequestOptions']->value), 0, false);
?>

</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
