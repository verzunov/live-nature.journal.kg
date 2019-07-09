<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:30:35
  from 'app:submissionformindex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24186b147785_30155786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10d18cabd09acc581a020d1f09ef304f29a1da44' => 
    array (
      0 => 'app:submissionformindex.tpl',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5d24186b147785_30155786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "submission.submit.title");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#submitTabs').pkpHandler(
			'$.pkp.pages.submission.SubmissionTabHandler',
			{
				submissionProgress: <?php echo $_smarty_tpl->tpl_vars['submissionProgress']->value;?>
,
				selected: <?php echo $_smarty_tpl->tpl_vars['submissionProgress']->value-1;?>
,
				cancelUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions",'escape'=>false),$_smarty_tpl ) ));?>
,
				cancelConfirmText: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.cancelSubmission"),$_smarty_tpl ) ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<div id="submitTabs" class="pkp_controllers_tab">
	<ul>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['steps']->value, 'stepLocaleKey', false, 'step');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['step']->value => $_smarty_tpl->tpl_vars['stepLocaleKey']->value) {
?>
			<li><a name="step-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['step']->value ));?>
" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"step",'path'=>$_smarty_tpl->tpl_vars['step']->value,'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'sectionId'=>$_smarty_tpl->tpl_vars['sectionId']->value),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['step']->value;?>
. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stepLocaleKey']->value),$_smarty_tpl ) );?>
</a></li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
