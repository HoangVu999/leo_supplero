<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__0ce4e6bbfed69da6f444b4797dc2c27adac84d84b92a89c985a282d2f50907fe */
class __TwigTemplate_cc5a788b8170033267ac11060adc86d29181d31f6b532894472de57cac2b3777 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/hoang/leo_supplero/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/hoang/leo_supplero/img/app_icon.png\" />

<title>Theme & Logo > Theme • leo_supplero</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'GB';
    var _PS_VERSION_ = '1.7.8.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'f456d8cd70e6198d0b6fd10f8eb397b8';
    var token_admin_orders = tokenAdminOrders = 'bb404faece3f4b7053935f1d0af97d28';
    var token_admin_customers = 'edc728f71d5c48454b8170c28d97c318';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'a68ae34007040a9357dbccccd430a848';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '3f81a276a3b6acbbc645dac235ca44d1';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/hoang/leo_supplero/admincp/index.php/improve/modules/catalog/recommended?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0';
    var admin_notification_get_link = '/hoang/leo_supplero/admincp/index.php/common/notifications?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0';
    var admin_notification_push_link = adminNotificationPushLink = '/hoang/leo_supplero/admincp/index.php/common/notifications/ack?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/hoang/leo_supplero/admincp/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/admincp/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/modules/appagebuilder/views/css/admin/style.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/hoang/leo_supplero/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var appagebuilder_listshortcode_url = \"http:\\/\\/localhost\\/hoang\\/leo_supplero\\/admincp\\/index.php?controller=AdminApPageBuilderShortcode&token=6c3a38b7f2cd7ff8127e7de04473ebe1&get_listshortcode=1\";
var appagebuilder_module_dir = \"\\/hoang\\/leo_supplero\\/modules\\/appagebuilder\\/\";
var baseAdminDir = \"\\/hoang\\/leo_supplero\\/admincp\\/\";
var baseDir = \"\\/hoang\\/leo_supplero\\/\";
var changeFormLanguageUrl = \"\\/hoang\\/leo_supplero\\/admincp\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var js_ap_dev = 1;
var leofeature_module_dir = \"\\/hoang\\/leo_supplero\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
var url_ajax_blog = \"http:\\/\\/localhost\\/hoang\\/leo_supplero\\/modules\\/leoblog\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/admincp/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/js/admin.js?v=1.7.8.2\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/admincp/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/js/tools.js?v=1.7.8.2\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/admincp/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/modules/appagebuilder/views/js/admin/function.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/hoang/leo_supplero/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/hoang/leo_supplero/admincp/index.php/common/notifications?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-en adminthemes\"
  data-base-url=\"/hoang/leo_supplero/admincp/index.php\"  data-token=\"Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminDashboard&amp;token=5270a23c3d9c2d32496ab7617d42abcd\"></a>
      <span id=\"shop_version\">1.7.8.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7341e61c4cc268b3b2c22c5069d522fc\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/hoang/leo_supplero/admincp/index.php/improve/modules/manage?token=9e674de163dd4ba2f9732b4e61f59c0b\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/hoang/leo_supplero/admincp/index.php/sell/catalog/categories/new?token=9e674de163dd4ba2f9732b4e61f59c0b\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/hoang/leo_supplero/admincp/index.php/sell/catalog/products/new?token=9e674de163dd4ba2f9732b4e61f59c0b\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5e3a952ab22b98a0dcf5ed0d70c19b20\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminOrders&amp;token=bb404faece3f4b7053935f1d0af97d28\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"161\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes\"
        data-post-link=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminQuickAccesses&token=36462da6a0d5ea7133959e4775d06b03\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Theme &amp; Logo - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminQuickAccesses&token=36462da6a0d5ea7133959e4775d06b03\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/hoang/leo_supplero/admincp/index.php?controller=AdminSearch&amp;token=074d67fcd435d9accb871eb012f0b34c\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/hoang/leo_supplero/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my shop</span>
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
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=a4cb31872ee673c3252b773775497a53\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/hoang/leo_supplero/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back De</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/employees/1/edit?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLogin&amp;logout=1&amp;token=4f4cacf83ec29acf98e82600ad29423b\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/employees/toggle-navigation?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminDashboard&amp;token=5270a23c3d9c2d32496ab7617d42abcd\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/sell/orders/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
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
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/orders/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/orders/invoices/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/orders/credit-slips/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/orders/delivery-slips/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCarts&amp;token=a4cb31872ee673c3252b773775497a53\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/sell/catalog/products?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/catalog/products?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/catalog/categories?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/catalog/monitoring/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminAttributesGroups&amp;token=ee7e995252c3b5ab108e4e05e1c07c9e\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/catalog/brands/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/attachments/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCartRules&amp;token=5e3a952ab22b98a0dcf5ed0d70c19b20\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/stocks/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/sell/customers/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
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
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/customers/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/addresses/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCustomerThreads&amp;token=a68ae34007040a9357dbccccd430a848\" class=\"link\">
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
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCustomerThreads&amp;token=a68ae34007040a9357dbccccd430a848\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/sell/customer-service/order-messages/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminReturn&amp;token=5ef54c263cd61edb70e0054a5109ab24\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminStats&amp;token=7341e61c4cc268b3b2c22c5069d522fc\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/improve/modules/manage?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/modules/manage?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/modules/catalog?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoProductSearchModule&amp;token=79ac9aa8357d51ef578080adf3865bf0\" class=\"link\"> Leo Product Search Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminLeoQuickLoginModule\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoQuickLoginModule&amp;token=71daad8f828686387a528de8479b828c\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=16f0fbbf84dec3265ad349a594998088\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes-catalog/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/mail_theme/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/cms-pages/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/modules/positions/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminImages&amp;token=a68d7e9ee3320243818e2c5ca3970e36\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCarriers&amp;token=6d074e191c01763eec088ec4cbcec272\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminCarriers&amp;token=6d074e191c01763eec088ec4cbcec272\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/shipping/preferences/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/improve/payment/payment_methods?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/payment/payment_methods?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/payment/preferences?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/improve/international/localization/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/international/localization/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/international/zones/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/international/taxes/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/improve/international/translations/settings?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"135\" id=\"subtab-AdminApPageBuilder\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderProfiles&amp;token=3f11e347bb82957d7b2a6293d72775d6\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Ap PageBuilder
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminApPageBuilderProfiles\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderProfiles&amp;token=3f11e347bb82957d7b2a6293d72775d6\" class=\"link\"> Ap Profiles Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminApPageBuilderPositions\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderPositions&amp;token=cb0354fce0c22ba7cc0fe69d6b1e4a3a\" class=\"link\"> Ap Positions Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-AdminApPageBuilderShortcode\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderShortcode&amp;token=6c3a38b7f2cd7ff8127e7de04473ebe1\" class=\"link\"> Ap ShortCode Manage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminApPageBuilderProducts\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderProducts&amp;token=88f2c51ec9f41a1f1c74326d2bb9a183\" class=\"link\"> Ap Products List Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-AdminApPageBuilderDetails\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderDetails&amp;token=fdc6c5a649bf035c094b1f5d4c6129a8\" class=\"link\"> Ap Products Details Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminApPageBuilderThemeEditor\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderThemeEditor&amp;token=202a3ceabe8780fedc0fd836b933f1ae\" class=\"link\"> Ap Live Theme Editor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminApPageBuilderModule\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderModule&amp;token=5837607234d67bce7a990357ea2138ad\" class=\"link\"> Ap Module Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminApPageBuilderThemeConfiguration\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderThemeConfiguration&amp;token=cdbd5be3c4e1d9373439b193eee09f3f\" class=\"link\"> Ap Theme Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-AdminApPageBuilderHook\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminApPageBuilderHook&amp;token=52dd139f3345d08eddb8c639afed4a9b\" class=\"link\"> Ap Hook Control Panel
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"148\" id=\"subtab-AdminLeoblogManagement\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=9cb8af3829cb05fc28de974799a4c4c9\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Leo Blog Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-148\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=9cb8af3829cb05fc28de974799a4c4c9\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoblogCategories&amp;token=eece8cc8d0f9aa12cd2a94eb6c3c896e\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoblogBlogs&amp;token=245098b794252896ba128b85c53560a2\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoblogComments&amp;token=b7ffbed85d853d3d13ab6c4f3043ea03\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeoblogModule&amp;token=387939bf008c8780c98ebd3d354a3559\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"155\" id=\"subtab-AdminLeofeatureManagement\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeofeatureModule&amp;token=56466f373ef30b4edac75f6d6dd8dfd6\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Feature Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-155\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeofeatureModule&amp;token=56466f373ef30b4edac75f6d6dd8dfd6\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminLeofeatureReviews&amp;token=474620eb48010c8ee39b5dd90ce45495\" class=\"link\"> Product Review Management
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/preferences/preferences?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/preferences/preferences?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/order-preferences/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/product-preferences/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/customer-preferences/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/contacts/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/shop/seo-urls/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminSearchConf&amp;token=599a9dc2969104f2ffd8ae8265294242\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/system-information/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/system-information/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/performance/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/administration/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/emails/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/import/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/employees/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/sql-requests/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/logs/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/webservice-keys/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/hoang/leo_supplero/admincp/index.php/configure/advanced/feature-flags/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Launch your shop!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resume</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Stop the OnBoarding</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Theme &amp; Logo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Theme &amp; Logo &gt; Theme          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/import?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\"                  title=\"Add new theme\"                >
                  <i class=\"material-icons\">add</i>                  Add new theme
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/export?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\"                  title=\"Export current theme\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Export current theme
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/hoang/leo_supplero/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.2%2526country%253Den/Help?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Theme & Logo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminPsThemeCustoConfiguration&token=4ed2ebc19f22be23c175b2948a75e84c\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"131\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminPsThemeCustoAdvanced&token=8bcbdb0e371c19a019e839e4d859fb50\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"132\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/import?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\"              title=\"Add new theme\"            >
              Add new theme
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/hoang/leo_supplero/admincp/index.php/improve/design/themes/export?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\"              title=\"Export current theme\"            >
              Export current theme
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/hoang/leo_supplero/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminThemes%253Fversion%253D1.7.8.2%2526country%253Den/Help?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continue</button>
  <a class=\"onboarding-button-shut-down\">Skip this tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Welcome to your shop!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hi! My name is Preston and I'm here to show you around.<\\/p>\\n    <p>You will discover a few essential steps before you can launch your shop:\\n    Create your first product, customize your shop, configure shipping and payments...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Let's get started!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Later<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Start<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/hoang\\/leo_supplero\\/admincp\\/index.php?controller=AdminDashboard&token=5270a23c3d9c2d32496ab7617d42abcd\"}]},{\"name\":\"product\",\"title\":\"Let's create your first product\",\"subtitle\":{\"1\":\"What do you want to tell about it? Think about what your customers want to know.\",\"2\":\"Add clear and attractive information. Don't worry, you can edit it later :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Give your product a catchy name.\",\"options\":[\"savepoint\"],\"page\":[\"\\/hoang\\/leo_supplero\\/admincp\\/index.php\\/sell\\/catalog\\/products\\/new?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\",\"ppleroindex.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Fill out the essential details in this tab. The other tabs are for more advanced information.\",\"page\":\"ppleroindex.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Add one or more pictures so your product looks tempting!\",\"page\":\"ppleroindex.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"How much do you want to sell it for?\",\"page\":\"ppleroindex.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yay! You just created your first product. Looks good, right?\",\"page\":\"ppleroindex.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Give your shop its own identity\",\"subtitle\":{\"1\":\"How do you want your shop to look? What makes it so special?\",\"2\":\"Customize your theme or choose the best design from our theme catalog.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"A good way to start is to add your own logo here!\",\"options\":[\"savepoint\"],\"page\":\"\\/hoang\\/leo_supplero\\/admincp\\/index.php\\/improve\\/design\\/themes\\/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"If you want something really special, have a look at the theme catalog!\",\"page\":\"\\/hoang\\/leo_supplero\\/admincp\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Get your shop ready for payments\",\"subtitle\":{\"1\":\"How do you want your customers to pay you?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"These payment methods are already available to your customers.\",\"options\":[\"savepoint\"],\"page\":\"\\/hoang\\/leo_supplero\\/admincp\\/index.php\\/improve\\/payment\\/payment_methods?_token=Dir4VhvE9EgGdb4L1kAaZ3W4Xr8zVU6y7W3Nv4SBce0\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choose your shipping solutions\",\"subtitle\":{\"1\":\"How do you want to deliver your products?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Here are the shipping methods available on your shop today.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/hoang\\/leo_supplero\\/admincp\\/index.php?controller=AdminCarriers&token=6d074e191c01763eec088ec4cbcec272\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Over to you!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          You've seen the essential, but there's a lot more to explore.<br \\/>\\n          Some resources can help you go further:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Starter Guide<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Training<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Video tutorial<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">I'm ready<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/hoang\\/leo_supplero\\/admincp\\/index.php?controller=AdminDashboard&token=5270a23c3d9c2d32496ab7617d42abcd\"}]}]}, 1, \"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminWelcome&token=b91fd9a3e8b76c08cdd91c5f03bb4334\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hey! Are you lost?</p>    <p>To continue, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continue</button>    </div>    <p>If you want to stop the tutorial for good, click here:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quit the Welcome tutorial</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Step <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Next</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1432
        $this->displayBlock('content_header', $context, $blocks);
        // line 1433
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1434
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1435
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1436
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/hoang/leo_supplero/admincp/index.php?controller=AdminDashboard&amp;token=5270a23c3d9c2d32496ab7617d42abcd\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=demo%40demo.com&amp;firstname=De&amp;lastname=Mo&amp;website=http%3A%2F%2Flocalhost%2Fhoang%2Fleo_supplero%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/hoang/leo_supplero/admincp/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=demo%40demo.com&amp;firstname=De&amp;lastname=Mo&amp;website=http%3A%2F%2Flocalhost%2Fhoang%2Fleo_supplero%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1543
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1432
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1433
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1434
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1435
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1543
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__0ce4e6bbfed69da6f444b4797dc2c27adac84d84b92a89c985a282d2f50907fe";
    }

    public function getDebugInfo()
    {
        return array (  1633 => 1543,  1628 => 1435,  1623 => 1434,  1618 => 1433,  1613 => 1432,  1604 => 106,  1596 => 1543,  1487 => 1436,  1484 => 1435,  1481 => 1434,  1478 => 1433,  1476 => 1432,  146 => 106,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__0ce4e6bbfed69da6f444b4797dc2c27adac84d84b92a89c985a282d2f50907fe", "");
    }
}
