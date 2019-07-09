<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:46:44
  from 'app:controllersmodalssubmissi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241c34963345_32603309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df9a675f11bef013c5e0649b6dd128922f479ae' => 
    array (
      0 => 'app:controllersmodalssubmissi',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d241c34963345_32603309 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#newIssueEntryTabs').pkpHandler(
				'$.pkp.controllers.tab.issueEntry.IssueEntryTabHandler',
				{
					<?php if ($_smarty_tpl->tpl_vars['selectedTab']->value) {?>selected:<?php echo $_smarty_tpl->tpl_vars['selectedTab']->value;?>
,<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['tabsUrl']->value) {?>tabsUrl:'<?php echo $_smarty_tpl->tpl_vars['tabsUrl']->value;?>
',<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['tabContentUrl']->value) {?>tabContentUrl:'<?php echo $_smarty_tpl->tpl_vars['tabContentUrl']->value;?>
',<?php }?>
					emptyLastTab: true
				});
	});
<?php echo '</script'; ?>
>
<div id="newIssueEntryTabs">
	<ul>
		<li>
			<a name="submission" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.issueEntry.IssueEntryTabHandler",'tab'=>"submission",'op'=>"submissionMetadata",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'tabPos'=>"0"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.issueEntry.submissionMetadata"),$_smarty_tpl ) );?>
</a>
		</li>
		<li>
			<a name="catalog" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.issueEntry.IssueEntryTabHandler",'tab'=>"identifiers",'op'=>"identifiers",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'tabPos'=>"1"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.identifiers"),$_smarty_tpl ) );?>
</a>
		</li>
		<?php if ($_smarty_tpl->tpl_vars['citationsEnabled']->value) {?>
			<li>
				<a name="citations" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.issueEntry.IssueEntryTabHandler",'tab'=>"citations",'op'=>"citations",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'tabPos'=>"2"),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.citations"),$_smarty_tpl ) );?>
</a>
			</li>
		<?php }?>
</ul>
<?php }
}
