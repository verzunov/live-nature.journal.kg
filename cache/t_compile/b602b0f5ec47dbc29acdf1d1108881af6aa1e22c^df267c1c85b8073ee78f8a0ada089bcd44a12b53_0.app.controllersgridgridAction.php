<?php
/* Smarty version 3.1.33, created on 2019-07-08 06:13:57
  from 'app:controllersgridgridAction' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d22df2530c991_42052521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df267c1c85b8073ee78f8a0ada089bcd44a12b53' => 
    array (
      0 => 'app:controllersgridgridAction',
      1 => 1559234240,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5d22df2530c991_42052521 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="actions btm">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grid']->value->getActions(@constant('GRID_ACTION_POSITION_BELOW')), 'action');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
?>
		<li>
			<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'contextId'=>$_smarty_tpl->tpl_vars['gridId']->value), 0, true);
?>
		</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
