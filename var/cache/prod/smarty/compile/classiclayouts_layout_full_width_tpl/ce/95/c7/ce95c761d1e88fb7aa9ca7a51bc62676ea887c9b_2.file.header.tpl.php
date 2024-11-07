<?php
/* Smarty version 4.3.4, created on 2024-10-30 18:30:37
  from '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6722b38d46a212_21402842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce95c761d1e88fb7aa9ca7a51bc62676ea887c9b' => 
    array (
      0 => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/_partials/header.tpl',
      1 => 1730055642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6722b38d46a212_21402842 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19648030376722b38d45d7d9_42427594', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12017844706722b38d45e536_99377124', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3194959146722b38d45f0e7_68203443', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_19648030376722b38d45d7d9_42427594 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_19648030376722b38d45d7d9_42427594',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <div class="banner-items">
        <a href="#">DeSabor Warsaw</a>
    </div>
      <div class="banner-items">
          <a href="#">Corporate Gift</a>
      </div>
      <div class="banner-items">
          <a href="#">Promotion</a>
      </div>
      <div class="banner-items">
          <a href="#">Contact us</a>
      </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_12017844706722b38d45e536_99377124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_12017844706722b38d45e536_99377124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_3194959146722b38d45f0e7_68203443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_3194959146722b38d45f0e7_68203443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
        <div class="header-top-right col-md-8 col-sm-12 position-static">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        </div>
       <div class="col-md-4 col-sm-12 header-top-links">
           <div class="header-link-group">
               <a href="https://shop.goop.com/account/wish_list" aria-label="wishlist heart" class="Headerstyles__Link-sc-1akwyw0-10 WishlistButtonstyles__HeartLink-pvqg4s-1 iPXmkE hKBXEh"><svg viewBox="0 0 24 24" height="32" width="32" class="WishlistButtonstyles__HeartIcon-pvqg4s-0 hKKiHG" aria-label="heart icon"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.63653 4.76811C6.64277 2.03516 10.5 3.94127 11.9999 6.9412C13.5 3.44126 18 2.44128 20.3633 4.76811C22.4065 6.62564 22.3993 9.72802 20.6996 11.8312C19.159 13.7375 13.2639 19.6725 12.1738 20.7669C12.0773 20.8637 11.9214 20.8651 11.8236 20.7696C10.7274 19.7004 4.8397 13.9295 3.30019 11.8312C1.60046 9.51447 1.59324 6.62564 3.63653 4.76811Z" stroke-width="1.25" stroke-linecap="round"></path></svg></a>
           </div>
           <div class="header-link-group">
               <div id="_desktop_user_info">
                   <div class="user-info">
                       <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                           <a
                                   class="logout hidden-sm-down"
                                   href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
"
                                   rel="nofollow"
                           >
                               <i class="material-icons">&#xE7FF;</i>
                               <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                           </a>
                           <a
                                   class="account"
                                   href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
"
                                   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                                   rel="nofollow"
                           >
                               <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
                               <span class="hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                           </a>
                       <?php } else { ?>
                           <a
                                   href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
?back=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] )), ENT_QUOTES, 'UTF-8');?>
"
                                   title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                                   rel="nofollow"
                           >
                               <i class="material-icons">&#xE7FF;</i>
                               <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                           </a>
                       <?php }?>
                   </div>
               </div>               <div id="_desktop_cart">
                   <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                       <div class="header">
                           <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                           <a rel="nofollow" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart link containing %nbProducts% product(s)','sprintf'=>array('%nbProducts%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                               <?php }?>
                               <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
                               <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                               <span class="cart-products-count">(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
)</span>
                               <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                           </a>
                           <?php }?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
