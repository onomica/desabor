{block name='header_banner'}
  <div class="header-banner">
{*    <div class="banner-items">*}
{*      <a href="#">DeSabor Warsaw</a>*}
{*    </div>*}
{*    <div class="banner-items">*}
{*      <a href="18-gifts-boxes">Corporate Gift</a>*}
{*    </div>*}
    <div class="banner-items">
      <a href="2-home">The Black Friday! Startuja w piatek, 29.11!</a>
    </div>
{*    <div class="banner-items">*}
{*      <a href="#">Contact us</a>*}
{*    </div>*}
{*    <div class="banner-func">*}
{*      {hook h='displayBanner'}*}
{*    </div>*}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
{*          <div class="col-md-5 col-xs-12">*}
{*            {hook h='displayNav1'}*}
{*          </div>*}
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
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
        <div class="header-top-right col-md-10 col-sm-12 position-static">
          {hook h='displayTop'}
{*          {hook h='displayNav2'}*}
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