<?php
/* Smarty version 4.3.4, created on 2024-11-13 20:30:56
  from '/home/lijpwpfm/domains/desabor.pl/public_html/admin123/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673552d0daa817_21376001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e210ffcc95433c28adbf047378da32c570df6122' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/admin123/themes/new-theme/template/content.tpl',
      1 => 1727430268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673552d0daa817_21376001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
