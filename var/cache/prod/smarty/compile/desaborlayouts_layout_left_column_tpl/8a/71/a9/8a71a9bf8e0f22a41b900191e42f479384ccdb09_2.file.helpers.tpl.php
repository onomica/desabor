<?php
/* Smarty version 4.3.4, created on 2024-11-22 09:15:27
  from '/home/lijpwpfm/domains/desabor.pl/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674091ffe85862_50558654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a71a9bf8e0f22a41b900191e42f479384ccdb09' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1727430256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674091ffe85862_50558654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/lijpwpfm/domains/desabor.pl/public_html/var/cache/prod/smarty/compile/desaborlayouts_layout_left_column_tpl/8a/71/a9/8a71a9bf8e0f22a41b900191e42f479384ccdb09_2.file.helpers.tpl.php',
    'uid' => '8a71a9bf8e0f22a41b900191e42f479384ccdb09',
    'call_name' => 'smarty_template_function_renderLogo_1869268290674091ffe821d8_42714497',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1869268290674091ffe821d8_42714497 */
if (!function_exists('smarty_template_function_renderLogo_1869268290674091ffe821d8_42714497')) {
function smarty_template_function_renderLogo_1869268290674091ffe821d8_42714497(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1869268290674091ffe821d8_42714497 */
}
