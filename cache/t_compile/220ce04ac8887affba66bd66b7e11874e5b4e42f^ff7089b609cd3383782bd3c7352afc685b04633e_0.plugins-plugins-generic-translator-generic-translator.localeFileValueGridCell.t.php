<?php
/* Smarty version 3.1.33, created on 2019-07-09 06:35:07
  from 'plugins-plugins-generic-translator-generic-translator:localeFileValueGridCell.t' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d24359b8aa0b9_60381684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff7089b609cd3383782bd3c7352afc685b04633e' => 
    array (
      0 => 'plugins-plugins-generic-translator-generic-translator:localeFileValueGridCell.t',
      1 => 1562653988,
      2 => 'plugins-plugins-generic-translator-generic-translator',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d24359b8aa0b9_60381684 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['id']->value) {?>
	<?php $_smarty_tpl->_assignInScope('cellId', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'concat' ][ 0 ], array( "cell-",$_smarty_tpl->tpl_vars['id']->value )));
} else { ?>
	<?php $_smarty_tpl->_assignInScope('cellId', '');
}?>
<span <?php if ($_smarty_tpl->tpl_vars['cellId']->value) {?>id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cellId']->value ));?>
" <?php }?>class="pkp_linkActions gridCellContainer">
	<div class="gridCellDisplay">
				<?php echo (($tmp = @call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translation']->value )))===null||$tmp==='' ? "&mdash;" : $tmp);?>

	</div>

	<div class="gridCellEdit">
		<span class="referenceLocaleName"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['referenceLocaleName']->value ));?>
</span>
		<textarea rows=4 cols=40 readonly="readonly" name="newRowId[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->getId() ));?>
][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['referenceLocale']->value ));?>
]"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reference']->value ));?>
</textarea>
		<span class="translationLocaleName"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translationLocaleName']->value ));?>
</span>
		<textarea rows=4 cols=40 name="newRowId[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['column']->value->getId() ));?>
][<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translationLocale']->value ));?>
]" <?php if ($_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex')) {?>tabindex="<?php echo $_smarty_tpl->tpl_vars['column']->value->getFlag('tabIndex');?>
"<?php }?>><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translation']->value ));?>
</textarea>
	</div>
</span>

<?php }
}
