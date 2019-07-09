<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:41:27
  from 'app:workfloweditorialLinkActi' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241af7811494_03452411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c79fa2703e2177d8dc994cf33a598ba1897432' => 
    array (
      0 => 'app:workfloweditorialLinkActi',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5d241af7811494_03452411 (Smarty_Internal_Template $_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['editorActions']->value)) {?>
	<?php if (array_intersect(array(ROLE_ID_MANAGER,ROLE_ID_SUB_EDITOR),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
		<ul class="pkp_workflow_decisions">
			<?php if ($_smarty_tpl->tpl_vars['allRecommendations']->value) {?>
				<li>
					<div class="pkp_workflow_recommendations">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.allRecommendations.display",'recommendations'=>$_smarty_tpl->tpl_vars['allRecommendations']->value),$_smarty_tpl ) );?>

					</div>
				</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['lastRecommendation']->value) {?>
				<li>
					<div class="pkp_workflow_recommendations">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.recommendation.display",'recommendation'=>$_smarty_tpl->tpl_vars['lastRecommendation']->value),$_smarty_tpl ) );?>

					</div>
				</li>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editorActions']->value, 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
				<li>
					<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'contextId'=>$_smarty_tpl->tpl_vars['contextId']->value), 0, true);
?>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }
} elseif (!$_smarty_tpl->tpl_vars['editorsAssigned']->value && array_intersect(array(ROLE_ID_MANAGER,ROLE_ID_SUB_EDITOR),(array)$_smarty_tpl->tpl_vars['userRoles']->value)) {?>
	<div class="pkp_no_workflow_decisions">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.submission.decision.noDecisionsAvailable"),$_smarty_tpl ) );?>

	</div>
<?php }
}
}
