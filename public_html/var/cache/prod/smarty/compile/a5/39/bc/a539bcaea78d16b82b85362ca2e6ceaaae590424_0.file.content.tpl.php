<?php
/* Smarty version 4.3.4, created on 2024-10-30 18:45:29
  from '/home/lijpwpfm/domains/dev.desabor.pl/public_html/admin123/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6722b709105ea1_75342717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a539bcaea78d16b82b85362ca2e6ceaaae590424' => 
    array (
      0 => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/admin123/themes/new-theme/template/content.tpl',
      1 => 1727430268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6722b709105ea1_75342717 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
