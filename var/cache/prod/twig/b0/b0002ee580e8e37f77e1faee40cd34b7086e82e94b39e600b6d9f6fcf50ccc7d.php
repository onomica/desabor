<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__b3add873101d041f4545339fecf95a292474524d5809538c5f38e2395c8584a2 */
class __TwigTemplate_4ba8476c3f4f3532dea359dd47e9b3fd57021e3629c09706a4caaf406cb9a7f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produkty • My Store</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPPreferences';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl-pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '8.2.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Nowe zamówienie zostało złożone w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'W twoim sklepie zarejestrował się nowy klient.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'W twoim sklepie została opublikowana nowa wiadomość.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = 'ec1869a33a6002735743856ef366a790';
    var currentIndex = 'index.php?controller=AdminPPreferences';
    var employee_token = 'bc7ff378bd72e126a7e29d3cdc142038';
    var choose_language_translate = 'Wybierz język:';
    var default_language = '3';
    var admin_modules_link = '/admin123/index.php/improve/modules/manage?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8';
    var admin_notification_get_link = '/admin123/index.php/common/notifications?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8';
    var admin_notification_push_link = adminNotificationPushLink = '/admin123/index.php/common/notifications/ack?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8';
    var tab_modules_list = '';
    var update_success_msg = 'Aktualizacja powiodła s";
        // line 42
        echo "ię';
    var search_product_msg = 'Szukaj produktu';
  </script>



<link
      rel=\"preload\"
      href=\"/admin123/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin123/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin123/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin123/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ets_blog/views/css/admin_all.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin123\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin123\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\"";
        // line 68
        echo ":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin123/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin123/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.2.0\"></script>
<script type=\"text/javascript\" src=\"/admin123/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin123/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/przelewy24/views/js/admin_common.js?v=1.0.24\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin123/index.php/common/notifications?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script type=\"text/javascript\">
var ets_blog_link_ajax_comment='https://desabor.pl/a";
        // line 103
        echo "dmin123/index.php?controller=AdminEtsBlogComment&token=b32968c78f128768461c1a2499672c91';
\$(document).ready(function(){
    \$.ajax({
        url: ets_blog_link_ajax_comment,
        data: 'action=getCountCommentsNoViewed',
        type: 'post',
        dataType: 'json',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if(\$('#subtab-AdminEtsBlogComment span').length)
                    \$('#subtab-AdminEtsBlogComment span').append('<span class=\"count_messages \">'+json.count+'</span>'); 
                else
                    \$('#subtab-AdminEtsBlogComment a').append('<span class=\"count_messages \">'+json.count+'</span>');
            }
            else
            {
                if(\$('#subtab-AdminEtsBlogComment span').length)
                    \$('#subtab-AdminEtsBlogComment span').append('<span class=\"count_messages hide\">'+json.count+'</span>'); 
                else
                    \$('#subtab-AdminEtsBlogComment a').append('<span class=\"count_messages hide\">'+json.count+'</span>');
            }
                                                              
        },
    });
});
</script>

";
        // line 131
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pl adminppreferences\"
  data-base-url=\"/admin123/index.php\"  data-token=\"7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://desabor.pl/admin123/index.php?controller=AdminDashboard&amp;token=8eb294270c532ea7b2c9dceaa56b0a3b\"></a>
      <span id=\"shop_version\">8.2.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://desabor.pl/admin123/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9736f28d398243d2dfed55fdfcad9044\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://desabor.pl/admin123/index.php/improve/modules/manage?token=c2be059ee8c195b5473487ac75432650\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://desabor.pl/admin123/index.php/sell/catalog/categories/new?token=c2be059ee8c195b5473487ac75432650\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://desabor.pl/admin123/index.php/sell/catalog/products-v2/create?token=c2be059ee8c195b5473487ac75432650\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"htt";
        // line 169
        echo "ps://desabor.pl/admin123/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=be37f20e9d90126d9220f22896b33203\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://desabor.pl/admin123/index.php/sell/orders?token=c2be059ee8c195b5473487ac75432650\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"119\"
        data-icon=\"icon-ShopParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/product-preferences\"
        data-post-link=\"https://desabor.pl/admin123/index.php?controller=AdminQuickAccesses&token=bc84dd0d7d5aead8be4c986c57f85218\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Product Settings - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj aktualną stronę do Szybkiego dostępu
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://desabor.pl/admin123/index.php?controller=AdminQuickAccesses&token=bc84dd0d7d5aead8be4c986c57f85218\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj Szybkiem dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin123/index.php?controller=AdminSearch&amp;token=142de2329520580959de2c5b62c0bf9e\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: ";
        // line 208
        echo "indeks produktu, nazwa klienta...)\" aria-label=\"Wyszukiwarka\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, odniesienie itp.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"Nazwa\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button clas";
        // line 224
        echo "s=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Anuluj</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Szybki dostęp</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://desabor.pl/admin123/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=9736f28d398243d2dfed55fdfcad9044\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://desabor.pl/admin123/index.php/improve/modules/manage?token=c2be059ee8c195b5473487ac75432650\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://desabor.pl/admin123/index.php/sell/catalog/categories/new?token=c2be059ee8c195b5473487ac75432650\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://desabor.pl/admin123/index.php/sell/catalog/products-v2/create?token=c2be059ee8c195b5473487ac75432650\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://desabor.pl/admin123/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=be37f20e9d90126d9220f22896b33203\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://desabor.pl/admin123/index.php/sell/orders?token=c2be059ee8c195b5473487ac75432650\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class";
        // line 267
        echo "=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"91\"
      data-icon=\"icon-ShopParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/product-preferences\"
      data-post-link=\"https://desabor.pl/admin123/index.php?controller=AdminQuickAccesses&token=bc84dd0d7d5aead8be4c986c57f85218\"
      data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
      data-link=\"Product Settings - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Dodaj aktualną stronę do Szybkiego dostępu
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://desabor.pl/admin123/index.php?controller=AdminQuickAccesses&token=bc84dd0d7d5aead8be4c986c57f85218\">
    <i class=\"material-icons\">settings</i>
    Zarządzaj Szybkiem dostępem
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://desabor.pl/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Wyświetl mój sklep</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-";
        // line 315
        echo "type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"https://desabor.pl/admin123/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5b6a5c9dabf777791a9fd405f2c2cdc2\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy jesteś aktywny w mediach społecznościowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class";
        // line 364
        echo "=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              Wydaje się, wszyscy Twoi klienci są zadowoleni :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://desabor.pl/img/pr/default.jpg\" alt=\"Test\" /></span>
        <span class=\"employee_profile\">Witaj ponownie Test</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin123/index.php/configure/advanced/employees/5/edit?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2";
        // line 412
        echo "VnFeALFi8\">
      <i class=\"material-icons\">edit</i>
      <span>Twój profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://desabor.pl/admin123/index.php?controller=AdminLogin&amp;logout=1&amp;token=b92ef7e47d5a9d63df283c6982b9a4d1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin123/index.php/configure/advanced/employees/toggle-navigation?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://desabor.pl/admin123/index.php?controller=AdminDashboard&amp;token=8eb294270c532ea7b2c9dceaa56b0a3b\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.2.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://desabor.pl/admin123/index.php?controller=AdminDashboard&amp;token=8eb294270c532ea7b2c9dceaa56b0a3b\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                ";
        // line 467
        echo "  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin123/index.php/sell/orders/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin123/index.php/sell/orders/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin123/index.php/sell/orders/invoices/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 498
        echo "veltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin123/index.php/sell/orders/credit-slips/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin123/index.php/sell/orders/delivery-slips/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminCarts&amp;token=5b6a5c9dabf777791a9fd405f2c2cdc2\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin123/index.php/sell/catalog/products?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
       ";
        // line 531
        echo "                                             <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin123/index.php/sell/catalog/products?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin123/index.php/sell/catalog/categories?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin123/index.php/sell/catalog/monitoring/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                       ";
        // line 561
        echo "       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminAttributesGroups&amp;token=103344c40cf9aef56895a25b6453d859\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin123/index.php/sell/catalog/brands/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin123/index.php/sell/attachments/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminCartRules&amp;token=be37f20e9d90126d9220f22896b33203\" class=\"link\"> Discounts
                                </a>
                 ";
        // line 590
        echo "             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin123/index.php/sell/stocks/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin123/index.php/sell/customers/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin123/index.php/sell/customers/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Custom";
        // line 621
        echo "ers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin123/index.php/sell/addresses/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminCustomerThreads&amp;token=a4aaf1b3d096bf10bb4c0185bbd177b0\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
          ";
        // line 654
        echo "                      <a href=\"https://desabor.pl/admin123/index.php?controller=AdminCustomerThreads&amp;token=a4aaf1b3d096bf10bb4c0185bbd177b0\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin123/index.php/sell/customer-service/order-messages/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminReturn&amp;token=07b55addd5c1d9a095b5c1ef44f1cca8\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminStats&amp;token=9736f28d398243d2dfed55fdfcad9044\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                     ";
        // line 686
        echo "                               <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin123/index.php/improve/modules/manage?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin123/index.php/improve/modules/manage?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Module Manager
                                </a>
              ";
        // line 722
        echo "                </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin123/index.php/improve/design/themes/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin123/index.php/improve/design/themes/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin123/index.php/improve/de";
        // line 753
        echo "sign/mail_theme/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin123/index.php/improve/design/cms-pages/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin123/index.php/improve/design/modules/positions/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminImages&amp;token=328d6c4661deb0a0f5b43d1ca2105a20\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLi";
        // line 784
        echo "nkWidget\">
                                <a href=\"/admin123/index.php/modules/link-widget/list?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminCarriers&amp;token=5faac4f2c5d4506f9847263e25e07bf8\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminCarriers&amp;token=5faac4f2c5d4506f9847263e25e07bf8\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                 ";
        // line 816
        echo "           
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin123/index.php/improve/shipping/preferences/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin123/index.php/improve/payment/payment_methods?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin123/index.php/improve/payment/payment_methods?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                      ";
        // line 847
        echo "            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin123/index.php/improve/payment/preferences?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin123/index.php/improve/international/localization/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin123/index.php/improve/international/localization/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Localization
                   ";
        // line 877
        echo "             </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin123/index.php/improve/international/zones/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin123/index.php/improve/international/taxes/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin123/index.php/improve/international/translations/settings?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
          ";
        // line 913
        echo "      <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin123/index.php/configure/shop/preferences/preferences?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/preferences/preferences?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/order-preferences/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI";
        // line 943
        echo "2VnFeALFi8\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/product-preferences/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin123/index.php/configure/shop/customer-preferences/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin123/index.php/configure/shop/contacts/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\"";
        // line 974
        echo ">
                                <a href=\"/admin123/index.php/configure/shop/seo-urls/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://desabor.pl/admin123/index.php?controller=AdminSearchConf&amp;token=610f3811c773b1e49d9cd288eba9c400\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin123/index.php/configure/advanced/system-information/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
         ";
        // line 1006
        echo "                                                   
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin123/index.php/configure/advanced/system-information/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin123/index.php/configure/advanced/performance/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin123/index.php/configure/advanced/administration/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin123/index.php/configure/advanced/emails/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> E-mail
                                </a>
                              </li>

                        ";
        // line 1036
        echo "                                                          
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin123/index.php/configure/advanced/import/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin123/index.php/configure/advanced/employees/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin123/index.php/configure/advanced/sql-requests/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin123/index.php/configure/advanced/logs/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Logs
                                </a>
 ";
        // line 1066
        echo "                             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin123/index.php/configure/advanced/webservice-keys/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin123/index.php/configure/advanced/feature-flags/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin123/index.php/configure/advanced/security/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
           ";
        // line 1097
        echo "                               
                    
          
            <li class=\"category-title\" data-submenu=\"132\" id=\"tab-AdminEtsBlog\">
                <span class=\"title\">Blog</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"133\" id=\"subtab-AdminEtsBlogPost\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminEtsBlogPost&amp;token=a1be70b06f64fa401069098f87072f94\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminPriceRule\">icon icon-AdminPriceRule</i>
                      <span>
                      Posts
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"134\" id=\"subtab-AdminEtsBlogCategory\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminEtsBlogCategory&amp;token=8e0390a739efc53463f5403890d68abb\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminCatalog\">icon icon-AdminCatalog</i>
                      <span>
                      Categories
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
 ";
        // line 1133
        echo "                                       </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminEtsBlogComment\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminEtsBlogComment&amp;token=b32968c78f128768461c1a2499672c91\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-comments\">icon icon-comments</i>
                      <span>
                      Comments
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminEtsBlogSetting\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminEtsBlogSetting&amp;token=f008ad4e2a5f1a621260214091e8bbda\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-AdminAdmin\">icon icon-AdminAdmin</i>
                      <span>
                      Global settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                            ";
        // line 1166
        echo "          
                  
                  <li class=\"link-levelone\" data-submenu=\"137\" id=\"subtab-AdminEtsBlogBackup\">
                    <a href=\"https://desabor.pl/admin123/index.php?controller=AdminEtsBlogBackup&amp;token=e48f22c27bffd95b6c8ef749628c65ec\" class=\"link\">
                      <i class=\"material-icons mi-icon icon-backup\">icon icon-backup</i>
                      <span>
                      Backup
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Shop Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin123/index.php/configure/shop/product-preferences/?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\" aria-current=\"page\">Product Settings</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produkty          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin123/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdmi";
        // line 1219
        echo "nPPreferences%253Fversion%253D8.2.0%2526country%253Dpl/Pomoc?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Pomoc\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin123/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpl%252Fdoc%252FAdminPPreferences%253Fversion%253D8.2.0%2526country%253Dpl/Pomoc?_token=7O_iwDbjVDvRLVYapUVh3rQD85Pi1iXsI2VnFeALFi8\"
            >
              Pomoc
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1266
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"https://desabor.pl/admin123/index.php?controller=AdminDashboard&amp;token=8eb294270c532ea7b2c9dceaa56b0a3b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1300
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 131
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1266
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1300
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__b3add873101d041f4545339fecf95a292474524d5809538c5f38e2395c8584a2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1467 => 1300,  1446 => 1266,  1435 => 131,  1426 => 1300,  1386 => 1266,  1337 => 1219,  1282 => 1166,  1247 => 1133,  1209 => 1097,  1176 => 1066,  1144 => 1036,  1112 => 1006,  1078 => 974,  1045 => 943,  1013 => 913,  975 => 877,  943 => 847,  910 => 816,  876 => 784,  843 => 753,  810 => 722,  772 => 686,  738 => 654,  703 => 621,  670 => 590,  639 => 561,  607 => 531,  572 => 498,  539 => 467,  482 => 412,  432 => 364,  381 => 315,  331 => 267,  286 => 224,  268 => 208,  227 => 169,  184 => 131,  154 => 103,  117 => 68,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__b3add873101d041f4545339fecf95a292474524d5809538c5f38e2395c8584a2", "");
    }
}
