<?php
/* Smarty version 3.1.33, created on 2019-07-09 04:41:21
  from 'app:controllersgridtaskstask.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d241af1e66895_44122666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642608917fb21577c3f7235b556979f3e7c86b25' => 
    array (
      0 => 'app:controllersgridtaskstask.',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d241af1e66895_44122666 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="task<?php if (!$_smarty_tpl->tpl_vars['notification']->value->getDateRead()) {?> unread<?php }?>">
	<span class="message">
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	</span>
	<div class="details">
		<?php if ($_smarty_tpl->tpl_vars['isMultiContext']->value) {?>
			<span class="acronym">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['context']->value->getLocalizedAcronym() ));?>

			</span>
		<?php }?>
		<span class="submission">
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['notificationObjectTitle']->value ));?>

		</span>
	</div>
</div>
<?php }
}
