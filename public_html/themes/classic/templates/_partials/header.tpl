{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='header_banner'}
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
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
{*  <nav class="header-nav">*}
{*    <div class="container">*}
{*      <div class="row">*}
{*        <div class="hidden-sm-down">*}
{*          <div class="col-md-5 col-xs-12">*}
{*            {hook h='displayNav1'}*}
{*          </div>*}
{*          <div class="col-md-7 right-nav">*}
{*              {hook h='displayNav2'}*}
{*          </div>*}
{*        </div>*}
{*        <div class="hidden-md-up text-sm-center mobile">*}
{*          <div class="float-xs-left" id="menu-icon">*}
{*            <i class="material-icons d-inline">&#xE5D2;</i>*}
{*          </div>*}
{*          <div class="float-xs-right" id="_mobile_cart"></div>*}
{*          <div class="float-xs-right" id="_mobile_user_info"></div>*}
{*          <div class="top-logo" id="_mobile_logo"></div>*}
{*          <div class="clearfix"></div>*}
{*        </div>*}
{*      </div>*}
{*    </div>*}
{*  </nav>*}
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1>
                {renderLogo}
              </h1>
            {else}
              {renderLogo}
            {/if}
          {/if}
        </div>
        <div class="header-top-right col-md-8 col-sm-12 position-static">
          {hook h='displayTop'}
        </div>
       <div class="col-md-4 col-sm-12 header-top-links">
           <div class="header-link-group">
               <a href="https://shop.goop.com/account/wish_list" aria-label="wishlist heart" class="Headerstyles__Link-sc-1akwyw0-10 WishlistButtonstyles__HeartLink-pvqg4s-1 iPXmkE hKBXEh"><svg viewBox="0 0 24 24" height="32" width="32" class="WishlistButtonstyles__HeartIcon-pvqg4s-0 hKKiHG" aria-label="heart icon"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.63653 4.76811C6.64277 2.03516 10.5 3.94127 11.9999 6.9412C13.5 3.44126 18 2.44128 20.3633 4.76811C22.4065 6.62564 22.3993 9.72802 20.6996 11.8312C19.159 13.7375 13.2639 19.6725 12.1738 20.7669C12.0773 20.8637 11.9214 20.8651 11.8236 20.7696C10.7274 19.7004 4.8397 13.9295 3.30019 11.8312C1.60046 9.51447 1.59324 6.62564 3.63653 4.76811Z" stroke-width="1.25" stroke-linecap="round"></path></svg></a>
           </div>
           <div class="header-link-group">
               <div id="_desktop_user_info">
                   <div class="user-info">
                       {if $logged}
                           <a
                                   class="logout hidden-sm-down"
                                   href="{$urls.actions.logout}"
                                   rel="nofollow"
                           >
                               <i class="material-icons">&#xE7FF;</i>
                               {l s='Sign out' d='Shop.Theme.Actions'}
                           </a>
                           <a
                                   class="account"
                                   href="{$urls.pages.my_account}"
                                   title="{l s='View my customer account' d='Shop.Theme.Customeraccount'}"
                                   rel="nofollow"
                           >
                               <i class="material-icons hidden-md-up logged">&#xE7FF;</i>
                               <span class="hidden-sm-down">{$customerName}</span>
                           </a>
                       {else}
                           <a
                                   href="{$urls.pages.authentication}?back={$urls.current_url|urlencode}"
                                   title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}"
                                   rel="nofollow"
                           >
                               <i class="material-icons">&#xE7FF;</i>
                               <span class="hidden-sm-down">{l s='Sign in' d='Shop.Theme.Actions'}</span>
                           </a>
                       {/if}
                   </div>
               </div>               <div id="_desktop_cart">
                   <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
                       <div class="header">
                           {if $cart.products_count > 0}
                           <a rel="nofollow" aria-label="{l s='Shopping cart link containing %nbProducts% product(s)' sprintf=['%nbProducts%' => $cart.products_count] d='Shop.Theme.Checkout'}" href="{$cart_url}">
                               {/if}
                               <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
                               <span class="hidden-sm-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
                               <span class="cart-products-count">({$cart.products_count})</span>
                               {if $cart.products_count > 0}
                           </a>
                           {/if}
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
  {hook h='displayNavFullWidth'}
{/block}
