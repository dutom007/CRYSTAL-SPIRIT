<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:24
         compiled from "/home/crystalsdx/www/themes/foliage/templates/errors/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1363333793595d0a84e03578-04510193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52155de977c21d38260e97673c239ed58b2c6fac' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/errors/404.tpl',
      1 => 1493295708,
      2 => 'file',
    ),
    '8b83c8736ff41c2ad42ef9555f5624838b9523c8' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/page.tpl',
      1 => 1493295708,
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
    'c39487647df3c894545be0389bcd30e2a16e39ee' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/errors/not-found.tpl',
      1 => 1493295708,
      2 => 'file',
    ),
    '5c417d3577f8ce1b17f30408a0a5e448e85b2cdf' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/footer.tpl',
      1 => 1493295702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1363333793595d0a84e03578-04510193',
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
  'unifunc' => 'content_595d0a851d8f13_42081081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595d0a851d8f13_42081081')) {function content_595d0a851d8f13_42081081($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
" dir="<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>rtl<?php } else { ?>ltr<?php }?>" class="<?php if ($_smarty_tpl->tpl_vars['language']->value['is_rtl']) {?>rtl<?php }?>">

  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a84eee626_05984278($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a85032dd3_43774865($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
          
          <header id="header" class="header-default">
            
              <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a850643d5_80145359($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
            
          </header>
          
            <?php /*  Call merged included template "_partials/notifications.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a8507e2e1_52325209($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/notifications.tpl" */?>
          
          <div id="wrapper">
              <?php if (Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value)&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_ACTIVED']->value&&$_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_FULL']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['PTS_PAGEBUILDER_CONTENT']->value;?>

              <?php } else { ?>
                  
                    <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a850cc086_37758096($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
                  
                  <div class="container">
                    <div class="row">
                      

                      
  <div id="content-wrapper" class="col-xs-12 clearfix">
    

  <section id="main">

    
      
    

    
  <?php /*  Call merged included template "errors/not-found.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a85107ab8_52413906($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "errors/not-found.tpl" */?>


    
      <footer class="page-footer">
        
          <!-- Footer content -->
        
      </footer>
    

  </section>


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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1363333793595d0a84e03578-04510193');
content_595d0a851ab8e1_29201034($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
            
          </footer>

        </main>
      </div>
    
        
           <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '1363333793595d0a84e03578-04510193');
content_595d0a8500d349_58586224($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
        
    
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

      <a id="to_top" class="hidden-md-down" href="javascript:;" title="<?php echo smartyTranslate(array('s'=>'Back Top','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" style="display: block;"><span class="material-icons">navigation</span></a>
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:24
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a84eee626_05984278')) {function content_595d0a84eee626_05984278($_smarty_tpl) {?>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '1363333793595d0a84e03578-04510193');
content_595d0a84f40a76_25294656($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '1363333793595d0a84e03578-04510193');
content_595d0a8500d349_58586224($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300" />
  
<link rel="stylesheet" type="text/css" href="/themes/foliage/assets/css/style.css"><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:24
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a84f40a76_25294656')) {function content_595d0a84f40a76_25294656($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a8500d349_58586224')) {function content_595d0a8500d349_58586224($_smarty_tpl) {?>


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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a85032dd3_43774865')) {function content_595d0a85032dd3_43774865($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a850643d5_80145359')) {function content_595d0a850643d5_80145359($_smarty_tpl) {?>


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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/notifications.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a8507e2e1_52325209')) {function content_595d0a8507e2e1_52325209($_smarty_tpl) {?>

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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a850cc086_37758096')) {function content_595d0a850cc086_37758096($_smarty_tpl) {?>
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/errors/not-found.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a85107ab8_52413906')) {function content_595d0a85107ab8_52413906($_smarty_tpl) {?>
<section id="content" class="page-content page-not-found">
	<div class="img-404 col-lg-6 col-md-6 col-sm-12 col-xs-12">

	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<h4><?php echo smartyTranslate(array('s'=>'OOPs! Page Not Found.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h4>
		  <p><?php echo smartyTranslate(array('s'=>'The page you are looking for was not found.','d'=>'Shop.Theme'),$_smarty_tpl);?>
</p>
		  
			<div class="buttons">
				<a class="btn" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Continue shopping'),$_smarty_tpl);?>
</span></a>
				<a class="btn" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true),'html'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Contact Us'),$_smarty_tpl);?>
</span></a>
			</div>

		  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayNotFound'),$_smarty_tpl);?>

	</div>
  
</section>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 11:49:25
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595d0a851ab8e1_29201034')) {function content_595d0a851ab8e1_29201034($_smarty_tpl) {?>
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