<?php
/* Smarty version 4.3.4, created on 2024-11-25 19:04:23
  from '/home/lijpwpfm/domains/desabor.pl/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6745108743a2c7_61146863',
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
function content_6745108743a2c7_61146863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/lijpwpfm/domains/desabor.pl/public_html/var/cache/dev/smarty/compile/desaborlayouts_layout_full_width_tpl/8a/71/a9/8a71a9bf8e0f22a41b900191e42f479384ccdb09_2.file.helpers.tpl.php',
    'uid' => '8a71a9bf8e0f22a41b900191e42f479384ccdb09',
    'call_name' => 'smarty_template_function_renderLogo_206730606067451087435912_53391044',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_206730606067451087435912_53391044 */
if (!function_exists('smarty_template_function_renderLogo_206730606067451087435912_53391044')) {
function smarty_template_function_renderLogo_206730606067451087435912_53391044(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_206730606067451087435912_53391044 */
}
