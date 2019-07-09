<?php
/* Smarty version 3.1.33, created on 2019-07-08 08:15:10
  from 'app:controllerstabpubIdsformp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22fb8e400d79_32874289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d55a6f8b3b3156a2f9f36241703e5e4c0087d1' => 
    array (
      0 => 'app:controllerstabpubIdsformp',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 4,
  ),
),false)) {
function content_5d22fb8e400d79_32874289 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"issue-management.md#edit-issue-identifiers",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

<?php echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#publicIdentifiersForm').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['pubObject']->value instanceof Article) {?>
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"updateIdentifiers"),$_smarty_tpl ) );?>
">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"publicationIdentifiersFormFieldsNotification"), 0, false);
?>
		<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubObject']->value->getId() ));?>
" />
		<input type="hidden" name="stageId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value ));?>
" />
		<input type="hidden" name="tabPos" value="1" />
		<input type="hidden" name="displayedInContainer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formParams']->value['displayedInContainer'] ));?>
" />
		<input type="hidden" name="tab" value="identifiers" />
<?php } elseif ($_smarty_tpl->tpl_vars['pubObject']->value instanceof ArticleGalley) {?>
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"grid.articleGalleys.ArticleGalleyGridHandler",'op'=>"updateIdentifiers",'submissionId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getSubmissionId(),'representationId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getId(),'escape'=>false),$_smarty_tpl ) );?>
">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"representationIdentifiersFormFieldsNotification"), 0, true);
} elseif ($_smarty_tpl->tpl_vars['pubObject']->value instanceof SubmissionFile) {?>
	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"api.file.ManageFileApiHandler",'op'=>"updateIdentifiers",'fileId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getFileId(),'revision'=>$_smarty_tpl->tpl_vars['pubObject']->value->getRevision(),'submissionId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getSubmissionId(),'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'fileStageId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getFileStage(),'escape'=>false),$_smarty_tpl ) );?>
">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"fileIdentifiersFormFieldsNotification"), 0, true);
} else { ?> 	<form class="pkp_form" id="publicIdentifiersForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"updateIdentifiers",'issueId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getId()),$_smarty_tpl ) );?>
">
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"issueIdentifiersFormFieldsNotification"), 0, true);
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"submission.publisherId",'id'=>"publisherId",'name'=>"publisherId",'value'=>$_smarty_tpl->tpl_vars['publisherId']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pubIdPlugins']->value, 'pubIdPlugin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pubIdPlugin']->value) {
?>
	<?php $_smarty_tpl->_assignInScope('pubIdMetadataFile', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdMetadataFile());?>
	<?php $_smarty_tpl->_assignInScope('canBeAssigned', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->canBeAssigned($_smarty_tpl->tpl_vars['pubObject']->value));?>
	<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pubIdMetadataFile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubObject'=>$_smarty_tpl->tpl_vars['pubObject']->value,'canBeAssigned'=>$_smarty_tpl->tpl_vars['canBeAssigned']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Controllers::Tab::PubIds::Form::PublicIdentifiersForm"),$_smarty_tpl ) );?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"publicIdentifiersFormSubmit",'submitText'=>"common.save"),$_smarty_tpl ) );?>


</form>
<?php }
}
