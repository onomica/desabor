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

<div class="footer-image col-md-3">
    <img src="https://desabor.pl/img/footer_logo.svg">
</div>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="{$urls.pages.my_account}" rel="nofollow">
      {l s='Your account' d='Shop.Theme.Customeraccount'}
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">{l s='Your account' d='Shop.Theme.Customeraccount'}</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
    {if $customer.is_logged}
        <li><a href="{$urls.pages.identity}" title="{l s='Information' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Information' d='Shop.Theme.Customeraccount'}</a></li>
        {if $customer.addresses|count}
          <li><a href="{$urls.pages.addresses}" title="{l s='Addresses' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Addresses' d='Shop.Theme.Customeraccount'}</a></li>
        {else}
          <li><a href="{$urls.pages.address}" title="{l s='Add first address' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Add first address' d='Shop.Theme.Customeraccount'}</a></li>
        {/if}
        {if !$configuration.is_catalog}
          <li><a href="{$urls.pages.history}" title="{l s='Orders' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Orders' d='Shop.Theme.Customeraccount'}</a></li>
        {/if}
        {if !$configuration.is_catalog}
          <li><a href="{$urls.pages.order_slip}" title="{l s='Credit slips' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Credit slips' d='Shop.Theme.Customeraccount'}</a></li>
        {/if}
        {if $configuration.voucher_enabled && !$configuration.is_catalog}
          <li><a href="{$urls.pages.discount}" title="{l s='Vouchers' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Vouchers' d='Shop.Theme.Customeraccount'}</a></li>
        {/if}
        {if $configuration.return_enabled && !$configuration.is_catalog}
          <li><a href="{$urls.pages.order_follow}" title="{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}</a></li>
        {/if}
        {hook h='displayMyAccountBlock'}
        <li><a href="{$urls.actions.logout}" title="{l s='Log me out' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Sign out' d='Shop.Theme.Actions'}</a></li>
      {else}
        <li><a href="{$urls.pages.guest_tracking}" title="{l s='Order tracking' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Order tracking' d='Shop.Theme.Customeraccount'}</a></li>
        <li><a href="{$urls.pages.my_account}" title="{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Sign in' d='Shop.Theme.Actions'}</a></li>
        <li><a href="{$urls.pages.register}" title="{l s='Create account' d='Shop.Theme.Customeraccount'}" rel="nofollow">{l s='Create account' d='Shop.Theme.Customeraccount'}</a></li>
        {hook h='displayMyAccountBlock'}
      {/if} 
	</ul>
    <div class="everblock everblock-4  col-12 col-md-12 everhook-hookDisplayMyAccountBlock" id="everblock-4" data-everposition="0" data-everhook="hookDisplayMyAccountBlock">
        <p>The Black Friday! <br>Startuja w piatek, 29.11! <br><a href="#">sprawdź zasady promocji!</a></p>
    </div>
</div>
