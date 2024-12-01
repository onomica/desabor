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

<div class="block_newsletter col-lg-8 col-md-12 col-sm-12" id="blockEmailSubscription_{$hookName}">
  <div class="block-newsletter-wrapper">
    <div id="block-newsletter-label" class="col-md-5 col-xs-12">
      {l s='Get our latest news and special sales' d='Shop.Theme.Global'}
      <p>
        {if $conditions}
          <p>{$conditions}</p>
        {/if}
      </p>
    </div>
    <div class="col-md-7 col-xs-12 newsletter-block">
      <div class="inst-mini-images">
        <a href="https://www.instagram.com/desabor_golf/profilecard/?igsh=eTNucjFvcm01bjk5">
          <img src="{$urls.theme_assets}img/inst_1.JPEG" alt="Your Image">
        </a>
        <a href="https://coravinpolska.pl">
          <img src="{$urls.theme_assets}img/inst_2.JPEG" alt="Your Image">
        </a>
        <a href="https://www.instagram.com/desabor_warsaw/profilecard/?igsh=MWg0cWNmNDU2ZjZ4YQ==">
          <img src="{$urls.theme_assets}img/inst_3.JPEG" alt="Your Image">
        </a>
      </div>
      <form action="{$urls.current_url}#blockEmailSubscription_{$hookName}" method="post">
        <div class="row">
          <div class="col-xs-12">
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
                aria-labelledby="block-newsletter-label"
                required
              >
            </div>
            <input
                    class="btn btn-primary float-xs-right hidden-xs-down"
                    name="submitNewsletter"
                    type="submit"
                    value="{l s='Subscribe' d='Shop.Theme.Actions'}"
            >
            <input
                    class="btn btn-primary float-xs-right hidden-sm-up"
                    name="submitNewsletter"
                    type="submit"
                    value="{l s='OK' d='Shop.Theme.Actions'}"
            >
            <input type="hidden" name="blockHookName" value="{$hookName}" />
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
