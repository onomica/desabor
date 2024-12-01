<?php
/* Smarty version 4.3.4, created on 2024-11-27 16:08:05
  from 'module:productcommentsviewstemplateshookproductcommentitemprototype.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67478a350c13a6_57054744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductcommentitemprototype.tpl',
      1 => 1727430248,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67478a350c13a6_57054744 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/lijpwpfm/domains/desabor.pl/public_html/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl -->
<div class="product-comment-list-item row" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
  <div class="col-sm-3 comment-infos">
    <div class="grade-stars" data-grade="@COMMENT_GRADE@"></div>
    <div class="comment-date">
      @COMMENT_DATE@
    </div>
    <div class="comment-author">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By %1$s','sprintf'=>array('@CUSTOMER_NAME@'),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </div>
  </div>

  <div class="col-sm-9 comment-content">
    <p class="h4">@COMMENT_TITLE@</p>
    <p>@COMMENT_COMMENT@</p>
    <div class="comment-buttons btn-group">
      <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
        <a class="useful-review">
          <i class="material-icons thumb_up" data-icon="thumb_up"></i>
          <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
        </a>
        <a class="not-useful-review">
          <i class="material-icons thumb_down" data-icon="thumb_down"></i>
          <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </a>
      <?php }?>
      <a class="report-abuse" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
        <i class="material-icons flag" data-icon="flag"></i>
      </a>
    </div>
  </div>
</div>
<!-- end /home/lijpwpfm/domains/desabor.pl/public_html/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl --><?php }
}
