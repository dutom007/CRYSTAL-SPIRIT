<?php

/* __string_template__df8b3a0f8a7284b6571c3e0a8342f8b35bc716c2996bf5e3f3f40f8a98a3f6d9 */
class __TwigTemplate_7038fd172f3547ad6c0b49b0017df348dece9283d7368b1b9a970945f3a7eab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0445811fad3a83d55180868e85848751dc60add24d9e735b855440ac61b308c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0445811fad3a83d55180868e85848751dc60add24d9e735b855440ac61b308c->enter($__internal_e0445811fad3a83d55180868e85848751dc60add24d9e735b855440ac61b308c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__df8b3a0f8a7284b6571c3e0a8342f8b35bc716c2996bf5e3f3f40f8a98a3f6d9"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produits • Crystal Spirit</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a623599ec0c56f1953074048bf09c8ea';
    var token_admin_orders = '061cc250d6c44051665c7037b3d6c7db';
    var token_admin_customers = 'b3b718f050769fb4cb475141da3e743a';
    var token_admin_customer_threads = '7ddc85e09cd0821fa781e14a58c4d941';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '300c79330f94e2aa49a0cc2403320503';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/admin13497682/index.php/module/catalog/recommended?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/psblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin13497682/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ptsthemepanel/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin13497682/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin13497682\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/admin13497682/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.1.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin13497682/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin13497682/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 71
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDashboard&amp;token=8a1c58899ceae83507eba52d69b49efc\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrders&amp;token=061cc250d6c44051665c7037b3d6c7db\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1239a16b6ff1b001458a3fe762c61259\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php/product/new?token=7bc31c8da45d260f069a45bb5b821d21\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCategories&amp;addcategory&amp;token=72102faadcc1b54d9cb78feec9c824a4\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"141\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/form/33\"
        data-post-link=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminQuickAccesses&token=5d0a1766814ae0bab9904158df90a6cc\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminQuickAccesses&token=5d0a1766814ae0bab9904158df90a6cc\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin13497682/index.php?controller=AdminSearch&amp;token=dc70686365d5ea3bf1bdd87c5fe4ca98\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">recherche<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"https://profile.prestashop.com/lucian.clain%40gmail.com.jpg\" /><br>
      <span>Martin Fabre</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminEmployees&amp;token=300c79330f94e2aa49a0cc2403320503&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLogin&amp;token=e454d173b20764a114e4d120c33691cb&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarts&token=a98ba285fac2732e2d0da147bf9ea647&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous fait une campagne d'acquisition par e-mail récemment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://crystal-spirit.com/\" target= \"_blank\">Crystal Spirit</a>
  </div>
</div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\">Mode debug</span>
        </div>
      </div>
        

    

    
    
\t\t\t<div id=\"pts-dropdown-top\" class=\"pull-xs-left list-unstyled ps-dropdown dropdown pull-left\">
\t\t\t\t\t<span data-toggle=\"dropdown\">Theme Control <i class=\"material-icons arrow-down\">keyboard_arrow_down</i></span>
\t\t\t\t\t<ul class=\"ps-dropdown-menu dropdown-menu\">\t<li class=\"dropdown-item\"><a href=\"index.php?controller=AdminModules&token=d3a97d6329d3109927d2e1f6e2c8b121
\t\t\t&tab_module=Home&configure=ptsthemepanel&module_name=ptsthemepanel\">Theme Control Panel</a></li> <li class=\"dropdown-item\"><a href=\"index.php?controller=AdminPspagebuilderProfile&token=7bb9d4d6b83e8f8ff1a7763f3c3af3ff\">Page Builder Profiles</a></li> <li class=\"dropdown-item\"><a href=\"index.php?controller=AdminPspagebuilderFooter&token=4eaa419881142c8586426eadbbf18b50\">Footer Builder Profiles</a></li>\t<li class=\"dropdown-item\"><a href=\"index.php?controller=AdminModules&token=d3a97d6329d3109927d2e1f6e2c8b121&tab_module=Home
\t\t\t\t&configure=psmegamenu&module_name=psmegamenu\">Megamenu</a></li>\t<li class=\"dropdown-item\"><a href=\"http://crystal-spirit.com/fr/?live_configurator_token=77562e98ad7410765f9d711003196fa4&id_employee=1&id_shop=1\">Live Theme Editor</a></li></ul></div>
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDashboard&amp;token=8a1c58899ceae83507eba52d69b49efc\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrders&amp;token=061cc250d6c44051665c7037b3d6c7db\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrders&amp;token=061cc250d6c44051665c7037b3d6c7db\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminInvoices&amp;token=b72246037b9ccb352f5c05524ea4ba9f\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminSlip&amp;token=b097eef05848bd5ab222a00feb5a5234\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDeliverySlip&amp;token=f817cd60546a7ec3c120286872dd0280\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarts&amp;token=a98ba285fac2732e2d0da147bf9ea647\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin13497682/index.php/product/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin13497682/index.php/product/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCategories&amp;token=72102faadcc1b54d9cb78feec9c824a4\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminTracking&amp;token=14e6737dedfcee6ab6fc7b0bf96d75d7\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAttributesGroups&amp;token=3c38595646f7d4afef6440d57cd9ed24\" class=\"link\"> Attributs &amp; Caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminManufacturers&amp;token=244d663ec9e409ba0dd5cbcd77f27f2c\" class=\"link\"> Marques &amp; Fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAttachments&amp;token=01a68cc04e7bd50e08a4c64a9a58783b\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCartRules&amp;token=1239a16b6ff1b001458a3fe762c61259\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomers&amp;token=b3b718f050769fb4cb475141da3e743a\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-23\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomers&amp;token=b3b718f050769fb4cb475141da3e743a\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAddresses&amp;token=eb159d305992443dd147971c1f5c4a85\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomerThreads&amp;token=7ddc85e09cd0821fa781e14a58c4d941\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Service client
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-27\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomerThreads&amp;token=7ddc85e09cd0821fa781e14a58c4d941\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrderMessage&amp;token=c220052fc95de14ddfca1c6f259f2d79\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminReturn&amp;token=be9061ac4f24e1470fbbe9eeae3c14b9\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminStats&amp;token=1131104ae19b7cd6a5ef9534386ccb47\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/admin13497682/index.php/module/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-42\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin13497682/index.php/module/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAddonsCatalog&amp;token=d1c6394336c660107b358ddb47b01455\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminThemes&amp;token=e5beac880e8417d041fba1bb095f83d4\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-46\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminThemes&amp;token=e5beac880e8417d041fba1bb095f83d4\" class=\"link\"> Thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminThemesCatalog&amp;token=42eed0e7d73f2afbc07cfd7399c62fa6\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCmsContent&amp;token=7ba812b16d210b0ca8a5b36cacbb5012\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminModulesPositions&amp;token=528dfa2a547c80f1ae591e48577daf82\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminImages&amp;token=4fe8c13b652ae88133ac71f0935bde10\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLinkWidget&amp;token=66dca57e0564eb505612229d5682d91e\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarriers&amp;token=b2f7398e404095fd5943b1bfaf8e8823\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transport
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarriers&amp;token=b2f7398e404095fd5943b1bfaf8e8823\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminShipping&amp;token=6f8b8dee4503e155a74b87e524adfada\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPayment&amp;token=f4c2eb741f7cf7d9e0f4162e4d3b1cbf\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-55\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPayment&amp;token=f4c2eb741f7cf7d9e0f4162e4d3b1cbf\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPaymentPreferences&amp;token=d1772e0bf01f55ea559ef5f09223193e\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLocalization&amp;token=2e0bd3f8bac6587db3a5d96f6c3e7224\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLocalization&amp;token=2e0bd3f8bac6587db3a5d96f6c3e7224\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCountries&amp;token=6da03300c53756b4ed6b6e13e7ece830\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminTaxes&amp;token=27c430540171096d39faa48cb0d12a68\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminTranslations&amp;token=6c1601771eb9d98f1370186af3f59acd\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"117\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogDashboard&amp;token=9bc26f65c014b636e26c479171003d3f\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Ps Blog Management
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-117\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"118\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogDashboard&amp;token=9bc26f65c014b636e26c479171003d3f\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogCategories&amp;token=55ee008ef63b903e122c07850f154c28\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogBlogs&amp;token=f38faf2bb436c747ef309ddc6c63e615\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogComments&amp;token=0414cb706f6db6ad8778da7324202330\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogModule&amp;token=69bbb706e2cb09b365cacee817b36284\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"123\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderProfile&amp;token=7bb9d4d6b83e8f8ff1a7763f3c3af3ff\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Page Builder
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-123\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderProfile&amp;token=7bb9d4d6b83e8f8ff1a7763f3c3af3ff\" class=\"link\"> Page Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderFooter&amp;token=4eaa419881142c8586426eadbbf18b50\" class=\"link\"> Footer Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderImage&amp;token=2cb62057fe24205b6be5ebb6511d1fa6\" class=\"link\"> Images Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderMenu&amp;token=faf6b6ab67da21fd1efb47b05bbb233c\" class=\"link\"> Sub-Menu Builder
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPreferences&amp;token=f111671ef2607de9c594f144f28e60e0\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-73\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPreferences&amp;token=f111671ef2607de9c594f144f28e60e0\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrderPreferences&amp;token=939814645d88764d5dbfc0525616c71c\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPPreferences&amp;token=db205dbc924ab2ff959f7df19bdadece\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomerPreferences&amp;token=657710f05c77ab866c52bcc098c9c9f1\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminContacts&amp;token=8785d2ee939090e2dc4d65a9dab2025c\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminMeta&amp;token=79acc5d2962887d948a595bea56d7743\" class=\"link\"> Trafic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminSearchConf&amp;token=393d5143efb537f9df83aa2db830a962\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminInformation&amp;token=fe15989ce4b29ff10fc52b10dbf834e1\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-95\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminInformation&amp;token=fe15989ce4b29ff10fc52b10dbf834e1\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPerformance&amp;token=ece3c2197ea220459b0464764791d231\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAdminPreferences&amp;token=3fa7ba6684ece60a0be3ade1b3b42b00\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminEmails&amp;token=1ee55f976605a4768ac14d574ae5bb9e\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminImport&amp;token=da3f2c48f96f4958552a901e3f7142bd\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminEmployees&amp;token=300c79330f94e2aa49a0cc2403320503\" class=\"link\"> Employés
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminRequestSql&amp;token=8b517b8d422d9d3340c4ba2f562ed5ef\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLogs&amp;token=66e3ad087a58d984c709d1cbbe0a325a\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminWebservice&amp;token=bbcd1f075aeaa83a234a222bc047d550\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"113\">
              <span class=\"title\">Autres</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"129\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminSelfUpgrade&amp;token=a256289c89039e59a9747e4f44cbc783\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    1-Click Upgrade
                                        </span>

                  </a>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1114
        $this->displayBlock('content_header', $context, $blocks);
        // line 1115
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1116
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1117
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1118
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDashboard&amp;token=8a1c58899ceae83507eba52d69b49efc\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Retour
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 1.403s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=lucian.clain%40gmail.com&amp;firstname=Martin&amp;lastname=Fabre&amp;website=http%3A%2F%2Fcrystal-spirit.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin13497682/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=lucian.clain%40gmail.com&amp;firstname=Martin&amp;lastname=Fabre&amp;website=http%3A%2F%2Fcrystal-spirit.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
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
        // line 1286
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_e0445811fad3a83d55180868e85848751dc60add24d9e735b855440ac61b308c->leave($__internal_e0445811fad3a83d55180868e85848751dc60add24d9e735b855440ac61b308c_prof);

    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_76ecfdf51a1c3f49cab73555e515efbfdbc32b88db4c52aac44b3215fe13a6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ecfdf51a1c3f49cab73555e515efbfdbc32b88db4c52aac44b3215fe13a6f1->enter($__internal_76ecfdf51a1c3f49cab73555e515efbfdbc32b88db4c52aac44b3215fe13a6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_76ecfdf51a1c3f49cab73555e515efbfdbc32b88db4c52aac44b3215fe13a6f1->leave($__internal_76ecfdf51a1c3f49cab73555e515efbfdbc32b88db4c52aac44b3215fe13a6f1_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_82da829d38b912e49c522202c3501dacf3a384bdb1bf335a4743b6db47f02f86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82da829d38b912e49c522202c3501dacf3a384bdb1bf335a4743b6db47f02f86->enter($__internal_82da829d38b912e49c522202c3501dacf3a384bdb1bf335a4743b6db47f02f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_82da829d38b912e49c522202c3501dacf3a384bdb1bf335a4743b6db47f02f86->leave($__internal_82da829d38b912e49c522202c3501dacf3a384bdb1bf335a4743b6db47f02f86_prof);

    }

    // line 1114
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_f3e7cdda81725ec59470f5276e693deebc0b238b9632f5a02b37e29e179a7ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e7cdda81725ec59470f5276e693deebc0b238b9632f5a02b37e29e179a7ec3->enter($__internal_f3e7cdda81725ec59470f5276e693deebc0b238b9632f5a02b37e29e179a7ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_f3e7cdda81725ec59470f5276e693deebc0b238b9632f5a02b37e29e179a7ec3->leave($__internal_f3e7cdda81725ec59470f5276e693deebc0b238b9632f5a02b37e29e179a7ec3_prof);

    }

    // line 1115
    public function block_content($context, array $blocks = array())
    {
        $__internal_06028fdffeabf793ab9da693c89c5ffb10062a270933ce013ccddaa925e42409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06028fdffeabf793ab9da693c89c5ffb10062a270933ce013ccddaa925e42409->enter($__internal_06028fdffeabf793ab9da693c89c5ffb10062a270933ce013ccddaa925e42409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_06028fdffeabf793ab9da693c89c5ffb10062a270933ce013ccddaa925e42409->leave($__internal_06028fdffeabf793ab9da693c89c5ffb10062a270933ce013ccddaa925e42409_prof);

    }

    // line 1116
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_5ea21943aceaf5635ee185b5b2b131143c143db8c25c05e3c6215e4948e9e080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea21943aceaf5635ee185b5b2b131143c143db8c25c05e3c6215e4948e9e080->enter($__internal_5ea21943aceaf5635ee185b5b2b131143c143db8c25c05e3c6215e4948e9e080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_5ea21943aceaf5635ee185b5b2b131143c143db8c25c05e3c6215e4948e9e080->leave($__internal_5ea21943aceaf5635ee185b5b2b131143c143db8c25c05e3c6215e4948e9e080_prof);

    }

    // line 1117
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_a8d6ff13c5f9b9411c4d4a82ece445a2976e6f28d8fa82d21894a76d3b3baa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d6ff13c5f9b9411c4d4a82ece445a2976e6f28d8fa82d21894a76d3b3baa34->enter($__internal_a8d6ff13c5f9b9411c4d4a82ece445a2976e6f28d8fa82d21894a76d3b3baa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_a8d6ff13c5f9b9411c4d4a82ece445a2976e6f28d8fa82d21894a76d3b3baa34->leave($__internal_a8d6ff13c5f9b9411c4d4a82ece445a2976e6f28d8fa82d21894a76d3b3baa34_prof);

    }

    // line 1286
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9aa9677eec81faaad542798e94c9747a74e3f3f23faabba8e29abe6aac90abb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa9677eec81faaad542798e94c9747a74e3f3f23faabba8e29abe6aac90abb6->enter($__internal_9aa9677eec81faaad542798e94c9747a74e3f3f23faabba8e29abe6aac90abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9aa9677eec81faaad542798e94c9747a74e3f3f23faabba8e29abe6aac90abb6->leave($__internal_9aa9677eec81faaad542798e94c9747a74e3f3f23faabba8e29abe6aac90abb6_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_ee3cddf953eddaf05482c3af5252eef02895b34c7ecc4cf58b293da6584542dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee3cddf953eddaf05482c3af5252eef02895b34c7ecc4cf58b293da6584542dc->enter($__internal_ee3cddf953eddaf05482c3af5252eef02895b34c7ecc4cf58b293da6584542dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_ee3cddf953eddaf05482c3af5252eef02895b34c7ecc4cf58b293da6584542dc->leave($__internal_ee3cddf953eddaf05482c3af5252eef02895b34c7ecc4cf58b293da6584542dc_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_37208b568689daed124f8a47944ab3ba37ec606e9bd57be8ed04656a97d04789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37208b568689daed124f8a47944ab3ba37ec606e9bd57be8ed04656a97d04789->enter($__internal_37208b568689daed124f8a47944ab3ba37ec606e9bd57be8ed04656a97d04789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_37208b568689daed124f8a47944ab3ba37ec606e9bd57be8ed04656a97d04789->leave($__internal_37208b568689daed124f8a47944ab3ba37ec606e9bd57be8ed04656a97d04789_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__df8b3a0f8a7284b6571c3e0a8342f8b35bc716c2996bf5e3f3f40f8a98a3f6d9";
    }

    public function getDebugInfo()
    {
        return array (  1407 => 1286,  1396 => 1117,  1385 => 1116,  1374 => 1115,  1363 => 1114,  1342 => 71,  1331 => 1286,  1161 => 1118,  1158 => 1117,  1155 => 1116,  1152 => 1115,  1150 => 1114,  103 => 71,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produits • Crystal Spirit</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a623599ec0c56f1953074048bf09c8ea';
    var token_admin_orders = '061cc250d6c44051665c7037b3d6c7db';
    var token_admin_customers = 'b3b718f050769fb4cb475141da3e743a';
    var token_admin_customer_threads = '7ddc85e09cd0821fa781e14a58c4d941';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '300c79330f94e2aa49a0cc2403320503';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/admin13497682/index.php/module/catalog/recommended?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/modules/psblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin13497682/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ptsthemepanel/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin13497682/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin13497682\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/admin13497682/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.1.1\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.1.1\"></script>
<script type=\"text/javascript\" src=\"/admin13497682/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin13497682/themes/default/js/vendor/nv.d3.min.js\"></script>


  

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDashboard&amp;token=8a1c58899ceae83507eba52d69b49efc\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrders&amp;token=061cc250d6c44051665c7037b3d6c7db\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1239a16b6ff1b001458a3fe762c61259\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php/product/new?token=7bc31c8da45d260f069a45bb5b821d21\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCategories&amp;addcategory&amp;token=72102faadcc1b54d9cb78feec9c824a4\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"141\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/form/33\"
        data-post-link=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminQuickAccesses&token=5d0a1766814ae0bab9904158df90a6cc\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminQuickAccesses&token=5d0a1766814ae0bab9904158df90a6cc\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin13497682/index.php?controller=AdminSearch&amp;token=dc70686365d5ea3bf1bdd87c5fe4ca98\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">recherche<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"https://profile.prestashop.com/lucian.clain%40gmail.com.jpg\" /><br>
      <span>Martin Fabre</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminEmployees&amp;token=300c79330f94e2aa49a0cc2403320503&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLogin&amp;token=e454d173b20764a114e4d120c33691cb&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
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
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarts&token=a98ba285fac2732e2d0da147bf9ea647&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Et pourquoi pas lancer des promotions de saison ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous fait une campagne d'acquisition par e-mail récemment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              Pas de nouvelle, bonne nouvelle, n'est-ce pas ?
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://crystal-spirit.com/\" target= \"_blank\">Crystal Spirit</a>
  </div>
</div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\">Mode debug</span>
        </div>
      </div>
        

    

    
    
\t\t\t<div id=\"pts-dropdown-top\" class=\"pull-xs-left list-unstyled ps-dropdown dropdown pull-left\">
\t\t\t\t\t<span data-toggle=\"dropdown\">Theme Control <i class=\"material-icons arrow-down\">keyboard_arrow_down</i></span>
\t\t\t\t\t<ul class=\"ps-dropdown-menu dropdown-menu\">\t<li class=\"dropdown-item\"><a href=\"index.php?controller=AdminModules&token=d3a97d6329d3109927d2e1f6e2c8b121
\t\t\t&tab_module=Home&configure=ptsthemepanel&module_name=ptsthemepanel\">Theme Control Panel</a></li> <li class=\"dropdown-item\"><a href=\"index.php?controller=AdminPspagebuilderProfile&token=7bb9d4d6b83e8f8ff1a7763f3c3af3ff\">Page Builder Profiles</a></li> <li class=\"dropdown-item\"><a href=\"index.php?controller=AdminPspagebuilderFooter&token=4eaa419881142c8586426eadbbf18b50\">Footer Builder Profiles</a></li>\t<li class=\"dropdown-item\"><a href=\"index.php?controller=AdminModules&token=d3a97d6329d3109927d2e1f6e2c8b121&tab_module=Home
\t\t\t\t&configure=psmegamenu&module_name=psmegamenu\">Megamenu</a></li>\t<li class=\"dropdown-item\"><a href=\"http://crystal-spirit.com/fr/?live_configurator_token=77562e98ad7410765f9d711003196fa4&id_employee=1&id_shop=1\">Live Theme Editor</a></li></ul></div>
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDashboard&amp;token=8a1c58899ceae83507eba52d69b49efc\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrders&amp;token=061cc250d6c44051665c7037b3d6c7db\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Commandes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrders&amp;token=061cc250d6c44051665c7037b3d6c7db\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminInvoices&amp;token=b72246037b9ccb352f5c05524ea4ba9f\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminSlip&amp;token=b097eef05848bd5ab222a00feb5a5234\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDeliverySlip&amp;token=f817cd60546a7ec3c120286872dd0280\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarts&amp;token=a98ba285fac2732e2d0da147bf9ea647\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin13497682/index.php/product/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catalogue
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin13497682/index.php/product/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCategories&amp;token=72102faadcc1b54d9cb78feec9c824a4\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminTracking&amp;token=14e6737dedfcee6ab6fc7b0bf96d75d7\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAttributesGroups&amp;token=3c38595646f7d4afef6440d57cd9ed24\" class=\"link\"> Attributs &amp; Caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminManufacturers&amp;token=244d663ec9e409ba0dd5cbcd77f27f2c\" class=\"link\"> Marques &amp; Fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAttachments&amp;token=01a68cc04e7bd50e08a4c64a9a58783b\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCartRules&amp;token=1239a16b6ff1b001458a3fe762c61259\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomers&amp;token=b3b718f050769fb4cb475141da3e743a\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clients
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-23\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomers&amp;token=b3b718f050769fb4cb475141da3e743a\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAddresses&amp;token=eb159d305992443dd147971c1f5c4a85\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomerThreads&amp;token=7ddc85e09cd0821fa781e14a58c4d941\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Service client
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-27\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomerThreads&amp;token=7ddc85e09cd0821fa781e14a58c4d941\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrderMessage&amp;token=c220052fc95de14ddfca1c6f259f2d79\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminReturn&amp;token=be9061ac4f24e1470fbbe9eeae3c14b9\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminStats&amp;token=1131104ae19b7cd6a5ef9534386ccb47\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Statistiques
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/admin13497682/index.php/module/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Modules
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-42\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/admin13497682/index.php/module/catalog?_token=UCDm3vhLihNxctgsY8ied54SAEUNtWqIAJ2lWz4q3fQ\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAddonsCatalog&amp;token=d1c6394336c660107b358ddb47b01455\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminThemes&amp;token=e5beac880e8417d041fba1bb095f83d4\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Apparence
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-46\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminThemes&amp;token=e5beac880e8417d041fba1bb095f83d4\" class=\"link\"> Thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminThemesCatalog&amp;token=42eed0e7d73f2afbc07cfd7399c62fa6\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCmsContent&amp;token=7ba812b16d210b0ca8a5b36cacbb5012\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminModulesPositions&amp;token=528dfa2a547c80f1ae591e48577daf82\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminImages&amp;token=4fe8c13b652ae88133ac71f0935bde10\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLinkWidget&amp;token=66dca57e0564eb505612229d5682d91e\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarriers&amp;token=b2f7398e404095fd5943b1bfaf8e8823\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transport
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCarriers&amp;token=b2f7398e404095fd5943b1bfaf8e8823\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminShipping&amp;token=6f8b8dee4503e155a74b87e524adfada\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPayment&amp;token=f4c2eb741f7cf7d9e0f4162e4d3b1cbf\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Paiement
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-55\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPayment&amp;token=f4c2eb741f7cf7d9e0f4162e4d3b1cbf\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPaymentPreferences&amp;token=d1772e0bf01f55ea559ef5f09223193e\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLocalization&amp;token=2e0bd3f8bac6587db3a5d96f6c3e7224\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    International
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-58\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLocalization&amp;token=2e0bd3f8bac6587db3a5d96f6c3e7224\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCountries&amp;token=6da03300c53756b4ed6b6e13e7ece830\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminTaxes&amp;token=27c430540171096d39faa48cb0d12a68\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminTranslations&amp;token=6c1601771eb9d98f1370186af3f59acd\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"117\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogDashboard&amp;token=9bc26f65c014b636e26c479171003d3f\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Ps Blog Management
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-117\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"118\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogDashboard&amp;token=9bc26f65c014b636e26c479171003d3f\" class=\"link\"> Blog Dashboard
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogCategories&amp;token=55ee008ef63b903e122c07850f154c28\" class=\"link\"> Categories Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogBlogs&amp;token=f38faf2bb436c747ef309ddc6c63e615\" class=\"link\"> Blogs Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogComments&amp;token=0414cb706f6db6ad8778da7324202330\" class=\"link\"> Comment Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"122\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPsblogModule&amp;token=69bbb706e2cb09b365cacee817b36284\" class=\"link\"> Ps Blog Configuration
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"123\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderProfile&amp;token=7bb9d4d6b83e8f8ff1a7763f3c3af3ff\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    Page Builder
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-123\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"124\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderProfile&amp;token=7bb9d4d6b83e8f8ff1a7763f3c3af3ff\" class=\"link\"> Page Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderFooter&amp;token=4eaa419881142c8586426eadbbf18b50\" class=\"link\"> Footer Builder
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderImage&amp;token=2cb62057fe24205b6be5ebb6511d1fa6\" class=\"link\"> Images Management
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"127\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPspagebuilderMenu&amp;token=faf6b6ab67da21fd1efb47b05bbb233c\" class=\"link\"> Sub-Menu Builder
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPreferences&amp;token=f111671ef2607de9c594f144f28e60e0\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Paramètres de la boutique
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-73\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPreferences&amp;token=f111671ef2607de9c594f144f28e60e0\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminOrderPreferences&amp;token=939814645d88764d5dbfc0525616c71c\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPPreferences&amp;token=db205dbc924ab2ff959f7df19bdadece\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminCustomerPreferences&amp;token=657710f05c77ab866c52bcc098c9c9f1\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminContacts&amp;token=8785d2ee939090e2dc4d65a9dab2025c\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminMeta&amp;token=79acc5d2962887d948a595bea56d7743\" class=\"link\"> Trafic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminSearchConf&amp;token=393d5143efb537f9df83aa2db830a962\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminInformation&amp;token=fe15989ce4b29ff10fc52b10dbf834e1\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Paramètres avancés
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-95\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminInformation&amp;token=fe15989ce4b29ff10fc52b10dbf834e1\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminPerformance&amp;token=ece3c2197ea220459b0464764791d231\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminAdminPreferences&amp;token=3fa7ba6684ece60a0be3ade1b3b42b00\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminEmails&amp;token=1ee55f976605a4768ac14d574ae5bb9e\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminImport&amp;token=da3f2c48f96f4958552a901e3f7142bd\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminEmployees&amp;token=300c79330f94e2aa49a0cc2403320503\" class=\"link\"> Employés
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminRequestSql&amp;token=8b517b8d422d9d3340c4ba2f562ed5ef\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminLogs&amp;token=66e3ad087a58d984c709d1cbbe0a325a\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminWebservice&amp;token=bbcd1f075aeaa83a234a222bc047d550\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"113\">
              <span class=\"title\">Autres</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"129\">
                  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminSelfUpgrade&amp;token=a256289c89039e59a9747e4f44cbc783\" class=\"link\">
                    <i class=\"material-icons\"></i>
                    <span>
                    1-Click Upgrade
                                        </span>

                  </a>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
        
    <div class=\"content-div -notoolbar\">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"m-t-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"m-t-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"m-t-2\">
    Merci.
  </p>
  <a href=\"https://crystal-spirit.com/admin13497682/index.php?controller=AdminDashboard&amp;token=8a1c58899ceae83507eba52d69b49efc\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Retour
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 1.403s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=lucian.clain%40gmail.com&amp;firstname=Martin&amp;lastname=Fabre&amp;website=http%3A%2F%2Fcrystal-spirit.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin13497682/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=lucian.clain%40gmail.com&amp;firstname=Martin&amp;lastname=Fabre&amp;website=http%3A%2F%2Fcrystal-spirit.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
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

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__df8b3a0f8a7284b6571c3e0a8342f8b35bc716c2996bf5e3f3f40f8a98a3f6d9", "");
    }
}
