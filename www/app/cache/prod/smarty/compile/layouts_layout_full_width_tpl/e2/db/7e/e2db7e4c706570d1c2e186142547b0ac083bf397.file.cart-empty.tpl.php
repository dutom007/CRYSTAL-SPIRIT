<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/cart-empty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:967765442595e9f297ad0f7-21084440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2db7e4c706570d1c2e186142547b0ac083bf397' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/cart-empty.tpl',
      1 => 1493295706,
      2 => 'file',
    ),
    '332bdb45bf9b714545ca30c09288db5764ce0dfb' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/cart.tpl',
      1 => 1493295706,
      2 => 'file',
    ),
    '761832ed83c97b00267bf6f3089cb1d309f99b0b' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/layouts/layout-full-width.tpl',
      1 => 1491211317,
      2 => 'file',
    ),
    '43ca2b50b38dd8d848668c1d8d22a2b75c70fe91' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/layouts/layout-both-columns.tpl',
      1 => 1491211317,
      2 => 'file',
    ),
    'f5f08033a6ff00c4bf42b2b9437b951c1a038dbd' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/stylesheets.tpl',
      1 => 1491211317,
      2 => 'file',
    ),
    '9889ee240bdcdf2e7643bde575f80a44291b1f93' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/javascript.tpl',
      1 => 1493295704,
      2 => 'file',
    ),
    'aa0f01ca946126b51fd0500b6f960ff8325194c7' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/head.tpl',
      1 => 1494921285,
      2 => 'file',
    ),
    '31183d42882dd92db5505e221d1f34deb26424ef' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/product-activation.tpl',
      1 => 1491211316,
      2 => 'file',
    ),
    '872384c9b706e522026f3eb95b6f948c9c3ae758' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/header.tpl',
      1 => 1495807863,
      2 => 'file',
    ),
    '2621096d0621897539c5fd9644ddecc65dc64845' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/notifications.tpl',
      1 => 1493295704,
      2 => 'file',
    ),
    '34c23b5a5db9977036a1476f0585955477bbea4c' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/breadcrumb.tpl',
      1 => 1495631561,
      2 => 'file',
    ),
    '859c089706f87d5e11d5cbb0fd4a2f6f5bff7f0a' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-detailed-product-line.tpl',
      1 => 1493295706,
      2 => 'file',
    ),
    '4d60cc174ed8b15354b0c02cceb498d3d63580bd' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-detailed.tpl',
      1 => 1493295706,
      2 => 'file',
    ),
    '51fb6bd840a92376b8eef48722a95ed7a7a69c82' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1493295706,
      2 => 'file',
    ),
    '1f8a66ee8dd6fb90faeb77759d3cbf6cd0bcf8de' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-detailed-totals.tpl',
      1 => 1493295706,
      2 => 'file',
    ),
    '5c417d3577f8ce1b17f30408a0a5e448e85b2cdf' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/footer.tpl',
      1 => 1493295702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967765442595e9f297ad0f7-21084440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'DEFAUTL_LAYOUT' => 0,
    'PTS_PAGEBUILDER_ACTIVED' => 0,
    'PTS_PAGEBUILDER_FULL' => 0,
    'PTS_PAGEBUILDER_CONTENT' => 0,
    'product' => 0,
    'category' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595e9f29d3b9e1_09682812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595e9f29d3b9e1_09682812')) {function content_595e9f29d3b9e1_09682812($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>rtl<?php } else { ?>ltr<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>rtl<?php }?>">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f2999f955_25340612($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
">
    <div class="row-offcanvas row-offcanvas-left <?php if (isset($_smarty_tpl->tpl_vars['DEFAUTL_LAYOUT']->value)) {?>layout-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['DEFAUTL_LAYOUT']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" id="page">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

        <div class="sidebar-offcanvas ps-mobile-megamenu" id="_mobile_menu"></div>
        <main>
          
            <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29b00698_93733763($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
          
          <header id="header" class="header-default">
            
              <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29b2ed71_54141389($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
            
          </header>
          
            <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29b686a6_91357345($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
          
          <div id="wrapper">
              <?php if (Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value)&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_FULL']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_CONTENT']->value;?>

              <?php } else { ?>
                  
                    <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29b8c4a1_01358490($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
                  
                  <div class="container">
                    <div class="row">
                      

                      
  <div id="content-wrapper" class="col-xs-12 clearfix">
    

  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo smartyTranslate(array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</h1>
          </div>
          <hr>
          
            <?php /*  Call merged included template "checkout/_partials/cart-detailed.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29bef2b2_57735229($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed.tpl" */?>
          
        </div>

        
  <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <i class="material-icons icon-left">chevron_left</i><?php echo smartyTranslate(array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

  </a>


        <!-- shipping informations -->
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShoppingCartFooter'),$_smarty_tpl);?>

        
      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        
          <div class="card cart-summary">

            
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayShoppingCart'),$_smarty_tpl);?>

            

            
              <?php /*  Call merged included template "checkout/_partials/cart-detailed-totals.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29c8f336_90581891($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-totals.tpl" */?>
            

            
  <div class="checkout text-xs-center card-block">
    <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
  </div>


          </div>
        

        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayReassurance'),$_smarty_tpl);?>

        

      </div>

    </div>
  </section>

  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCrossSellingShoppingCart'),$_smarty_tpl);?>


  </div>


                      
                    </div>
                  </div>
              <?php }?>
          </div>
          
          <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=="product") {?>
            <div class="relatedproduct">
              <div class="container">
                <div class="row">
                  
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl);?>

                  
                </div>
              </div>
            </div>
          <?php }?>

          <footer id="footer">
            
              <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29d27390_73799628($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
            
          </footer>

        </main>
      </div>
    
        
           <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29a1eba5_16539714($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
        
    
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

      <a id="to_top" class="hidden-md-down" href="javascript:;" title="<?php echo smartyTranslate(array('s'=>'Back Top','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" style="display: block;"><span class="material-icons">navigation</span></a>
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f2999f955_25340612')) {function content_595e9f2999f955_25340612($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">


  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f299d6b65_78911690($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29a1eba5_16539714($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300" />
  
<link rel="stylesheet" type="text/css" href="/themes/foliage/assets/css/style.css"><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f299d6b65_78911690')) {function content_595e9f299d6b65_78911690($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29a1eba5_16539714')) {function content_595e9f29a1eba5_16539714($_smarty_tpl) {?>


<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>


<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29b00698_93733763')) {function content_595e9f29b00698_93733763($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">error_outline</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29b2ed71_54141389')) {function content_595e9f29b2ed71_54141389($_smarty_tpl) {?>


  <nav class="header-nav">
    <div class="container">
        <div class="hidden-md-down">
          
        </div>
        <div class="hidden-lg-up text-xs-center header-mobile mobile"> 	
          <button class="btn canvas-menu float-xs-left" data-toggle="offcanvas" type="button"><span class="material-icons">dehaze</span>
          </button>	 
          <div class="float-xs-right" id="_mobile_search"></div>                 
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_setting"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
		   <div class="float-xs-right" ><a href="http://crystal-spirit.com/"<i class="material-icons">home</i></a></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
    </div>
  </nav>


  <div class="header-top  hidden-md-down">
    <div class="container">
      <div class="float-xs-left col-lg-6" id="_desktop_logo">
        <div class="<?php if (Configuration::get('PTS_CP_LOGOTYPE')=='logo-theme') {?>logo-theme<?php } else { ?>logo-store<?php }?>">
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
            <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" <?php if (Configuration::get('PTS_CP_LOGOTYPE')=='logo-theme') {?>hidden<?php }?> alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
          </a>
        </div>
      </div>
      <div class="position-static header-right col-xs-12 col-sm-12 col-md-3 col-lg-2">

       
        <div id="_desktop_setting">
		
          <div class=" setting-btn dropdown js-dropdown">
            <a data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="">
              <i class="material-icons expand-more">language</i>
              <i class="material-icons expand-more">arrow_drop_down</i>
            </a>
            <div class="dropdown-menu">
              
               <?php if (class_exists('PtsthemePanel')) {?>
                  <?php echo PtsthemePanel::smartyplugin(array('module'=>'ps_languageselector','hook'=>'displayTop'),$_smarty_tpl);?>

                  <?php echo PtsthemePanel::smartyplugin(array('module'=>'ps_currencyselector','hook'=>'displayTop'),$_smarty_tpl);?>
 
              <?php }?>
            </div>
          </div>
        </div>
         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>
  
          <div class="clearfix"></div>
      </div>
	  <!-- De base 8, changer à 12 pour l'avoir sur une ligne -->
      <div id="_desktop_menu" class="ps-desktop-megamenu position-static col-lg-12">
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayMainmenu"),$_smarty_tpl);?>

          
      </div>  
      
    </div>
  </div> 
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNavFullWidth'),$_smarty_tpl);?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29b686a6_91357345')) {function content_595e9f29b686a6_91357345($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      
        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      
        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['warning']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      
        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      
        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
              <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } ?>
          </ul>
        </article>
      
    <?php }?>
  </div>
</aside>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29b8c4a1_01358490')) {function content_595e9f29b8c4a1_01358490($_smarty_tpl) {?>
<div class="ps_breadcumb hidden-md-down">
  <div class="container">
    <div class="wrap clearfix">
      <div class="breadcrumb-heading">
          <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['path']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['path']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['path']->iteration++;
 $_smarty_tpl->tpl_vars['path']->last = $_smarty_tpl->tpl_vars['path']->iteration === $_smarty_tpl->tpl_vars['path']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['last'] = $_smarty_tpl->tpl_vars['path']->last;
?>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['last']) {?>
                <h1 class="oui"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h1>
            <?php }?>
          <?php } ?>
      </div>
      <nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
          <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['path']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['path']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['path']->iteration++;
 $_smarty_tpl->tpl_vars['path']->last = $_smarty_tpl->tpl_vars['path']->iteration === $_smarty_tpl->tpl_vars['path']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['last'] = $_smarty_tpl->tpl_vars['path']->last;
?>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              </a>
              <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
            </li>
          <?php } ?>
        </ol>
      </nav>
    </div>
  </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-detailed.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29bef2b2_57735229')) {function content_595e9f29bef2b2_57735229($_smarty_tpl) {?>

  <div class="cart-overview js-cart" data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl);?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
    <ul class="cart-items">
      <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
        <li class="cart-item">
          
            <?php /*  Call merged included template "checkout/_partials/cart-detailed-product-line.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '967765442595e9f297ad0f7-21084440');
content_595e9f29c48c31_89269807($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-detailed-product-line.tpl" */?>
          
        </li>
        <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])>1) {?><hr><?php }?>
      <?php } ?>
    </ul>
    <?php } else { ?>
      <span class="no-items"><?php echo smartyTranslate(array('s'=>'There are no more items in your cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
    <?php }?>
  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-detailed-product-line.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29c48c31_89269807')) {function content_595e9f29c48c31_89269807($_smarty_tpl) {?>
<div class="product-line-grid row">
  <!--  product left content: image-->
  <div class="product-line-grid-left col-md-3 col-xs-4">
    <span class="product-image media-middle">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'quotes'), ENT_QUOTES, 'UTF-8');?>
">
    </span>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-body col-md-4 col-xs-8">
    <div class="product-line-info">
      <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" data-id_customization="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>

    <div class="product-line-info">
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
        <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
      <?php }?>
    </div>

    <br/>

    <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["attribute"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["attribute"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
      <div class="product-line-info">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } ?>

    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
      <br>
      
      <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
        <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
        <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
              </div>
              <div class="modal-body">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                  <div class="product-customization-line row">
                    <div class="col-sm-3 col-xs-4 label">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="col-sm-9 col-xs-8 value">
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                        <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                          <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                        <?php } else { ?>
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                      <?php }?>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      
    <?php }?>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
    <div class="row">
      <div class="col-xs-4 hidden-md-up"></div>
      <div class="col-md-10 col-xs-6">
        <div class="row">
          <div class="col-md-6 col-xs-6 qty">
            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
              <span class="gift-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
              <input
                class="js-cart-line-product-quantity"
                data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                name="product-quantity-spin"
                min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
              />
            <?php }?>
          </div>
          <div class="col-md-6 col-xs-2 price">
            <span class="product-price">
              <strong>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                  <span class="gift"><?php echo smartyTranslate(array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </strong>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-xs-2 text-xs-right">
        <div class="cart-line-product-actions ">
          <a
              class                       = "remove-from-cart"
              rel                         = "nofollow"
              href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
              data-link-action            = "delete-from-cart"
              data-id-product             = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
              data-id-product-attribute   = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
              data-id-customization   	  = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
          >
            <?php if (!isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])||!$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
            <i class="material-icons float-xs-left">delete</i>
            <?php }?>
          </a>

          
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

          

        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-detailed-totals.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29c8f336_90581891')) {function content_595e9f29c8f336_90581891($_smarty_tpl) {?>

<div class="cart-detailed-totals">

  <div class="card-block">
    <?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['value']&&$_smarty_tpl->tpl_vars['subtotal']->value['type']!=='tax') {?>
        <div class="cart-summary-line" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
          <span class="label<?php if ('products'===$_smarty_tpl->tpl_vars['subtotal']->value['type']) {?> js-subtotal<?php }?>">
            <?php if ('products'==$_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <?php }?>
          </span>
          <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type']==='shipping') {?>
              <div><small class="value"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSubtotalDetails','subtotal'=>$_smarty_tpl->tpl_vars['subtotal']->value),$_smarty_tpl);?>
</small></div>
          <?php }?>
        </div>
      <?php }?>
    <?php } ?>
  </div>

  

  <hr>

  <div class="card-block">
    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>

    <div class="cart-summary-line">
      <small class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</small>
      <small class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</small>
    </div>
  </div>

  <hr>
</div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/checkout/_partials/cart-voucher.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29cbf407_76481406')) {function content_595e9f29cbf407_76481406($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-06 16:35:53
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595e9f29d27390_73799628')) {function content_595e9f29d27390_73799628($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value)&&!empty($_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value)) {?>  
  <div class="footer-container">
    <?php echo $_smarty_tpl->tpl_vars['PTS_FOOTERBUILDER_CONTENT']->value;?>

  </div>
<?php }?>
  <div class="container">
    <div class="row">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterBefore'),$_smarty_tpl);?>

    
    </div>
  </div>
  <div class="footer-container">
    <div class="container">
      <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>

      
      </div>
      <div class="row">
      
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterAfter'),$_smarty_tpl);?>

      
      </div>
    <!--
    <div class="row">
      <div class="col-md-12">
        <p>
          
          <a class="_blank" href="http://www.prestashop.com" target="_blank">
            <?php echo smartyTranslate(array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop�','%year%'=>date('Y'),'%copyright%'=>'�'),'d'=>'Shop.Theme'),$_smarty_tpl);?>

          </a>
          
        </p>
      </div>
    </div>
    -->
  </div>
</div>
<?php }} ?>
