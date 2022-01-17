<?php
/* Smarty version 3.1.39, created on 2022-01-15 02:29:56
  from 'F:\xampp\htdocs\hoang\leo_supplero\modules\leoblog\views\templates\hook\link_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e277f43e5862_01922713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f52696a340a8dcaa51f40b1529738741924d0e0a' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hoang\\leo_supplero\\modules\\leoblog\\views\\templates\\hook\\link_list.tpl',
      1 => 1642210523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e277f43e5862_01922713 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 link-top-blog"><i class="material-icons">&#xE254;</i><span class="hidden-sm-down"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></a>
<?php }
}
