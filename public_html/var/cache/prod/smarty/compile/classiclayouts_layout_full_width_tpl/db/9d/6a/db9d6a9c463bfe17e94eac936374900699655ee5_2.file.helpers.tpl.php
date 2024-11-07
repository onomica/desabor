<?php
/* Smarty version 4.3.4, created on 2024-10-30 18:30:37
  from '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6722b38d3dc858_02130016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db9d6a9c463bfe17e94eac936374900699655ee5' => 
    array (
      0 => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1727430256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6722b38d3dc858_02130016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/db/9d/6a/db9d6a9c463bfe17e94eac936374900699655ee5_2.file.helpers.tpl.php',
    'uid' => 'db9d6a9c463bfe17e94eac936374900699655ee5',
    'call_name' => 'smarty_template_function_renderLogo_6451193046722b38d3d9017_85707771',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_6451193046722b38d3d9017_85707771 */
if (!function_exists('smarty_template_function_renderLogo_6451193046722b38d3d9017_85707771')) {
function smarty_template_function_renderLogo_6451193046722b38d3d9017_85707771(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_6451193046722b38d3d9017_85707771 */
}
