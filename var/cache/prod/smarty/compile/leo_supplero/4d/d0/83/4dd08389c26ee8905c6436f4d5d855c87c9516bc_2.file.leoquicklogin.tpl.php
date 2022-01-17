<?php
/* Smarty version 3.1.39, created on 2022-01-15 02:29:56
  from 'F:\xampp\htdocs\hoang\leo_supplero\modules\leoquicklogin\views\templates\hook\leoquicklogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e277f4275d42_42502767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd08389c26ee8905c6436f4d5d855c87c9516bc' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hoang\\leo_supplero\\modules\\leoquicklogin\\views\\templates\\hook\\leoquicklogin.tpl',
      1 => 1642211615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e277f4275d42_42502767 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isLogged']->value) {?>
    <a class="logout" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['logout_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <i class="material-icons">&#xE879;</i>      
        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span>
    </a>
    <a class="account" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['my_account_url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View My Account','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
" rel="nofollow">
        <i class="material-icons">&#xE7FD;</i>
        <span class="hidden-sm-down"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customerName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
    </a>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'html') {?>
        <?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown') {?>
            <div class="dropdown">
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?>
            <div class="dropup">
        <?php }?>
            <a href="javascript:void(0)" 
               class="leo-quicklogin-nav leo-quicklogin<?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?> leo-dropdown dropdown-toggle<?php }?>" 
               data-enable-sociallogin="<?php if ((isset($_smarty_tpl->tpl_vars['enable_sociallogin']->value))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['enable_sociallogin']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
               data-type="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leo_type']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" 
               data-layout="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leo_layout']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
               <?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?> 
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
               <?php }?>
               title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
"
               rel="nofollow">
                <i class="material-icons">&#xE851;</i>
                <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick Login','mod'=>'leoquicklogin'),$_smarty_tpl ) );?>
</span>
            </a>
        <?php if ($_smarty_tpl->tpl_vars['leo_type']->value == 'dropdown' || $_smarty_tpl->tpl_vars['leo_type']->value == 'dropup') {?>
                <div class="dropdown-menu leo-dropdown-wrapper">
                    <?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>
                </div>
            </div>
        <?php }?>
    <?php }
}
}
}
