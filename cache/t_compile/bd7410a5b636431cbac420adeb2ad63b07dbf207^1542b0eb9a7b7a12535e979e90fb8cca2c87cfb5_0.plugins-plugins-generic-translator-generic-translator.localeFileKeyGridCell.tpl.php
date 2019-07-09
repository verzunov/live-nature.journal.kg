<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:35:07
  from 'plugins-plugins-generic-translator-generic-translator:localeFileKeyGridCell.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24359b858567_71662087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1542b0eb9a7b7a12535e979e90fb8cca2c87cfb5' => 
    array (
      0 => 'plugins-plugins-generic-translator-generic-translator:localeFileKeyGridCell.tpl',
      1 => 1562653988,
      2 => 'plugins-plugins-generic-translator-generic-translator',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24359b858567_71662087 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
}?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cellId']->value ));?>
" <?php }?>class="pkp_linkActions gridCellContainer">
	<div class="gridCellDisplay">
		<?php if ($_smarty_tpl->tpl_vars['strong']->value) {?><strong><?php }
echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value )))===null||$tmp==='' ? "&mdash;" : $tmp);
if ($_smarty_tpl->tpl_vars['strong']->value) {?></strong><?php }?>
	</div>

	<div class="gridCellEdit">
		<input type="text" name="newRowId[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->getId() ));?>
]" <?php if ($_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex')) {?>tabindex="<?php echo $_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex');?>
"<?php }?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value ));?>
" />
	</div>
</span>

<?php }
}
