<?php
/* Smarty version 4.3.4, created on 2024-11-13 20:29:42
  from 'module:productcommentsviewstemplateshookproductlistreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673552865f5114_86934863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductlistreviews.tpl',
      1 => 1727430248,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673552865f5114_86934863 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/lijpwpfm/domains/desabor.pl/public_html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /home/lijpwpfm/domains/desabor.pl/public_html/modules/productcomments/views/templates/hook/product-list-reviews.tpl --><?php }
}
