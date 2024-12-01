<?php
/* Smarty version 4.3.4, created on 2024-11-27 15:56:31
  from '/home/lijpwpfm/domains/desabor.pl/public_html/modules/desabor/views/templates/hook/gifts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6747877f0ea760_93912646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb144fd212fadce5994cffb0a82ba178021fa2f6' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/modules/desabor/views/templates/hook/gifts.tpl',
      1 => 1732572474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6747877f0ea760_93912646 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="featured-products clearfix">
  <h2 class="h2 products-section-title text-uppercase">
    Popularne produkty
  </h2>
  [ph-product-cms id="1"]
  <div class="custom-all-products-link">
    <a class="all-product-link float-xs-left float-md-right h4" href="2-home">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
    </a>
  </div>
</section>
<div class="content-grid">
  <div class="image-block">
    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/gift22.jpeg"/>
  </div>
  <div class="text-block">
    <h2 class="title">Twórz swoje pudełka prezentowe z DeSabor, aby podarować wyjątkowe upominki</h2>
    <p class="description">
      Od drobnych gestów po wyjątkowe prezenty – DeSabor przygotował kolekcję pudełek i przysmaków, łączącą odwagę z tradycją.
    </p>
    <a href="18-gifts-boxes" class="btn">Wybierz swój prezent &rarr;</a>
  </div>
</div><?php }
}
