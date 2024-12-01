<?php
/* Smarty version 4.3.4, created on 2024-11-27 15:56:31
  from '/home/lijpwpfm/domains/desabor.pl/public_html/modules/desaborfourimages/views/templates/hook/four-images.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6747877f0f4503_01774616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3df7638249f67df4b5f925c2e395f0ec4da45c7' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/modules/desaborfourimages/views/templates/hook/four-images.tpl',
      1 => 1732661623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6747877f0f4503_01774616 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="featured-products clearfix">
  <div class="four-images-container">
    <div class="four-images-wrapper">
      <a href="16-gourmet-products" class="image-block">
        <div class="image-block">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/file.jpg" alt="Example Image" />
          <span class="image-title">Gourmet products</span>
        </div>
      </a>
      <a href="10-wine-cellar" class="image-block">
        <div class="image-block">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/img_2.jpg" alt="Example Image" />
          <span class="image-title">Wine cellar</span>
        </div>
      </a>
      <a href="17-sweet-salty" class="image-block">
        <div class="image-block">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/chips.jpg" alt="Example Image" />
          <span class="image-title">Salt & Spices</span>
        </div>
      </a>
      <a href="#" class="image-block">
        <div class="image-block">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/img_4.jpg" alt="Example Image" />
          <span class="image-title">Tasting events</span>
        </div>
      </a>
    </div>
    <div class="custom-all-products-link">
      <a class="all-product-link float-xs-left float-md-right h4" href="2-home">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
      </a>
    </div>
  </div>
</section>
<div class="content-grid">
  <div class="text-block">
    <p class="subtitle">O NAS</p>
    <h2 class="title">DeSabor Spanish Gourmet & Wine: pasja do smaku i stylu życia</h2>
    <p class="description">
      DeSabor powstało z pasji do kulinariów, podróży i zamiłowania do śródziemnomorskiego stylu życia. Założycielem firmy jest rodowity Hiszpan, który postawił sobie za cel przybliżenie kultury, smaków i dziedzictwa Hiszpanii swoim polskim sąsiadom.
    </p>
    <a href="content/4-about-us" class="btn">Dowiedz się więcej &rarr;</a>
  </div>
  <div class="image-block">
    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/about-us.jpg" alt="Example Image" />
  </div>
  <div class="image-block">
    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/golf.jpeg" alt="Example Image" />
  </div>
  <div class="text-block">
    <p class="subtitle">ZOSTAŃ CZŁONKIEM</p>
    <h2 class="title">Dołącz do DeSabor Club!</h2>
    <p class="description">
      DeSabor Club to dostęp do najwyższej jakości produktów, limitowanych edycji i ekskluzywnych promocji. Dołącz, zbieraj punkty i korzystaj z wyjątkowych wydarzeń dla członków!
    </p>
    <button class="btn">Zapisz się teraz &rarr;</button>
  </div>
</div>

<?php }
}
