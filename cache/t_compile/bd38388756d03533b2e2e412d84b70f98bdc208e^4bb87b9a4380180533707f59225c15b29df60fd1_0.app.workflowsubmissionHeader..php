<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:41:26
  from 'app:workflowsubmissionHeader.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241af6ce2940_12692060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb87b9a4380180533707f59225c15b29df60fd1' => 
    array (
      0 => 'app:workflowsubmissionHeader.',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 3,
  ),
),false)) {
function content_5d241af6ce2940_12692060 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="pkp_page_title">
	<h1 class="pkp_submission_title">
		<span class="pkp_screen_reader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submissionTitle"),$_smarty_tpl ) );?>
</span>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submission']->value->getLocalizedTitle() ));?>

	</h1>
	<div class="pkp_submission_author">
		<span class="pkp_screen_reader"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.role.author_s"),$_smarty_tpl ) );?>
</span>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submission']->value->getAuthorString() ));?>

	</div>
	<ul class="pkp_submission_actions">
		<?php if ($_smarty_tpl->tpl_vars['submissionEntryAction']->value) {?>
			<li><?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['submissionEntryAction']->value), 0, false);
?></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['submissionInformationCenterAction']->value) {?>
			<li><?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['submissionInformationCenterAction']->value), 0, true);
?></li>
		<?php }?>
		<li><?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['submissionLibraryAction']->value), 0, true);
?></li>
	</ul>
</div>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'submissionProgressBarUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"submissionProgressBar",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'contextId'=>"submission",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"submissionProgressBarDiv",'url'=>$_smarty_tpl->tpl_vars['submissionProgressBarUrl']->value),$_smarty_tpl ) );?>

<?php }
}
