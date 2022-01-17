<?php
/* Smarty version 3.1.39, created on 2022-01-15 02:29:55
  from 'F:\xampp\htdocs\hoang\leo_supplero\themes\leo_supplero\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e277f354b8d0_37854735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37cdf95e11f17c76f181e3e9632ad533da40bf79' => 
    array (
      0 => 'F:\\xampp\\htdocs\\hoang\\leo_supplero\\themes\\leo_supplero\\templates\\_partials\\helpers.tpl',
      1 => 1636104739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61e277f354b8d0_37854735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'F:\\xampp\\htdocs\\hoang\\leo_supplero\\var\\cache\\prod\\smarty\\compile\\leo_supplerolayouts_layout_full_width_tpl\\37\\cd\\f9\\37cdf95e11f17c76f181e3e9632ad533da40bf79_2.file.helpers.tpl.php',
    'uid' => '37cdf95e11f17c76f181e3e9632ad533da40bf79',
    'call_name' => 'smarty_template_function_renderLogo_51837604161e277f34c9886_23894492',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_51837604161e277f34c9886_23894492 */
if (!function_exists('smarty_template_function_renderLogo_51837604161e277f34c9886_23894492')) {
function smarty_template_function_renderLogo_51837604161e277f34c9886_23894492(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_51837604161e277f34c9886_23894492 */
}
