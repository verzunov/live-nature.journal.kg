<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:35:28
  from 'app:controllerswizardfileUplo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2419905f7bf6_40421097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3676b7991ccae709a3e0b2511331cd90732ccf1' => 
    array (
      0 => 'app:controllerswizardfileUplo',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2419905f7bf6_40421097 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="finishSubmissionForm" class="pkp_helpers_text_center">
	<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.fileAdded"),$_smarty_tpl ) );?>
</h2>
	<?php if ($_smarty_tpl->tpl_vars['fileStage']->value != @constant('SUBMISSION_FILE_PROOF')) {?>
		<button class="pkp_button" type="button" name="newFile" id="newFile"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'submission.submit.newFile'),$_smarty_tpl ) );?>
</button>
	<?php }?>
	<br>
	<br>
</div>
<?php }
}
