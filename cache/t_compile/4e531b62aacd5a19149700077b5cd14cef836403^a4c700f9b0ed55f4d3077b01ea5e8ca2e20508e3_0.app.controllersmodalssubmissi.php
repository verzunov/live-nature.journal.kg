<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:46:44
  from 'app:controllersmodalssubmissi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241c34d937c3_85912436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4c700f9b0ed55f4d3077b01ea5e8ca2e20508e3' => 
    array (
      0 => 'app:controllersmodalssubmissi',
      1 => 1559234184,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:submission/form/section.tpl' => 1,
    'core:submission/submissionLocale.tpl' => 1,
    'core:submission/submissionMetadataFormTitleFields.tpl' => 1,
    'app:submission/form/categories.tpl' => 1,
    'app:controllers/fileUploadContainer.tpl' => 1,
    'app:linkAction/linkAction.tpl' => 1,
    'app:submission/submissionMetadataFormFields.tpl' => 1,
  ),
),false)) {
function content_5d241c34d937c3_85912436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('submissionMetadataViewFormId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid("submissionMetadataViewForm-") )));?>

<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#<?php echo $_smarty_tpl->tpl_vars['submissionMetadataViewFormId']->value;?>
').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				readOnly: <?php echo json_encode($_smarty_tpl->tpl_vars['formParams']->value['readOnly']);?>
,
				$uploader: $('#coverImageUploader'),
				$preview: $('#coverImagePreview'),
				uploaderOptions: {
					uploadUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"uploadCoverImage",'escape'=>false),$_smarty_tpl ) ));?>
,
					baseUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['baseUrl']->value);?>
,
					filters: {
						mime_types : [
							{ title : "Image files", extensions : "jpg,jpeg,png,svg" }
						]
					},
					multipart_params: {
						submissionId: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
,
						<?php if ($_smarty_tpl->tpl_vars['stageId']->value) {?>stageId: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value ));?>
,<?php }?>
					}
				}
			}
		);
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="<?php echo $_smarty_tpl->tpl_vars['submissionMetadataViewFormId']->value;?>
" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'op'=>"saveForm"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_assignInScope('notificationId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid("submissionMetadataViewFormNotification-") )));?>
	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>$_smarty_tpl->tpl_vars['notificationId']->value), 0, false);
?>

	<input type="hidden" name="submissionId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value ));?>
" />
	<input type="hidden" name="stageId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value ));?>
" />
	<input type="hidden" name="displayedInContainer" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formParams']->value['displayedInContainer'] ));?>
" />
	<input type="hidden" name="tab" value="submission" />

	<?php $_smarty_tpl->_subTemplateRender("app:submission/form/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('readOnly'=>$_smarty_tpl->tpl_vars['formParams']->value['readOnly']), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("core:submission/submissionLocale.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('readOnly'=>$_smarty_tpl->tpl_vars['formParams']->value['readOnly']), 0, false);
?>

	<?php $_smarty_tpl->_subTemplateRender("core:submission/submissionMetadataFormTitleFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('readOnly'=>$_smarty_tpl->tpl_vars['formParams']->value['readOnly']), 0, false);
?>

		<?php if (!$_smarty_tpl->tpl_vars['formParams']->value['hideSubmit'] || !$_smarty_tpl->tpl_vars['formParams']->value['anonymous']) {?>
				<?php $_smarty_tpl->_assignInScope('authorsGridContainer', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( uniqid("authorsGridContainer-") )));?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'authorGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.users.author.AuthorGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>$_smarty_tpl->tpl_vars['authorsGridContainer']->value,'url'=>((string)$_smarty_tpl->tpl_vars['authorGridUrl']->value)),$_smarty_tpl ) );?>

	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender("app:submission/form/categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"coverImage",'title'=>"editor.article.coverImage"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"coverImage",'title'=>"editor.article.coverImage"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if (!$_smarty_tpl->tpl_vars['formParams']->value['readOnly']) {?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->_subTemplateRender("app:controllers/fileUploadContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"coverImageUploader"), 0, false);
?>
				<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('id'=>"coverImagePreview"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('id'=>"coverImagePreview"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['coverImage']->value != '') {?>
				<div class="pkp_form_file_view pkp_form_image_view">
					<div class="img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['publicFilesDir']->value;?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImage']->value,"url" ));
echo uniqid('?');?>
" <?php if ($_smarty_tpl->tpl_vars['coverImageAlt']->value !== '') {?> alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['coverImageAlt']->value ));?>
"<?php }?>>
					</div>

					<div class="data">
						<span class="title">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.altText"),$_smarty_tpl ) );?>

						</span>
						<span class="value">
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"coverImageAltText",'label'=>"common.altTextInstructions",'value'=>$_smarty_tpl->tpl_vars['coverImageAltText']->value,'readonly'=>$_smarty_tpl->tpl_vars['formParams']->value['readOnly']),$_smarty_tpl ) );?>

						</span>

						<?php if (!$_smarty_tpl->tpl_vars['formParams']->value['readOnly']) {?>
							<div id="<?php echo $_smarty_tpl->tpl_vars['deleteCoverImageLinkAction']->value->getId();?>
" class="actions">
								<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['deleteCoverImageLinkAction']->value,'contextId'=>"issueForm"), 0, false);
?>
							</div>
						<?php }?>
					</div>
				</div>
			<?php }?>
		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('id'=>"coverImagePreview"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"coverImage",'title'=>"editor.article.coverImage"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php $_smarty_tpl->_subTemplateRender("app:submission/submissionMetadataFormFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('readOnly'=>$_smarty_tpl->tpl_vars['formParams']->value['readOnly'],'metadataModal'=>true), 0, false);
?>

	<?php if (!$_smarty_tpl->tpl_vars['formParams']->value['hideSubmit']) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"submissionMetadataFormSubmit",'submitText'=>"common.save"),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
