<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:56:10
         compiled from "/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1161908091595cfe0a96bae3-34343661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41d0120cfc6c03d834176156f6137576d7fc98bf' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/products.tpl',
      1 => 1493374317,
      2 => 'file',
    ),
    'b6aa8620c5aa53d834ee2c3f47dfb038f07a1975' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/variant-links.tpl',
      1 => 1491211316,
      2 => 'file',
    ),
    '134217cb77ef9c7c92b64aed5547ec1dd2188ed2' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/sub/product/style1.tpl',
      1 => 1496062252,
      2 => 'file',
    ),
    '99a84ef1a5ff4b147e544df82e28971dda7ed3a7' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/_partials/pagination.tpl',
      1 => 1493295704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1161908091595cfe0a96bae3-34343661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_style' => 0,
    'listing' => 0,
    'nbItemsPerLine' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfe0a9cbe34_86177131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfe0a9cbe34_86177131')) {function content_595cfe0a9cbe34_86177131($_smarty_tpl) {?>
 
<?php if (!isset($_smarty_tpl->tpl_vars['product_style']->value)) {?>
    <?php $_smarty_tpl->tpl_vars['product_style'] = new Smarty_variable(Configuration::get('PTS_CP_PRODUCT_STYLE'), null, 0);?>
<?php }?>
<?php if (Configuration::get('PTS_CP_PRODUCTS_ITEMROW')) {?>
  <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(Configuration::get('PTS_CP_PRODUCTS_ITEMROW'), null, 0);?>
<?php } else { ?>
  <?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(3, null, 0);?>
<?php }?>


<div id="js-product-list">
  <div class="products flexRow owl-wrapper grid products-block <?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_style']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?> style1<?php }?>">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listing']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <div class="owl-item col-xs-12 col-sm-6 col-md-6 col-lg-<?php echo htmlspecialchars(12/$_smarty_tpl->tpl_vars['nbItemsPerLine']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="item">
          
            <?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?>
              <?php /*  Call merged included template "sub/product/style1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sub/product/style1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '1161908091595cfe0a96bae3-34343661');
content_595cfe0a97e8f3_88674368($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "sub/product/style1.tpl" */?>
            <?php } else { ?>
              <?php /*  Call merged included template "sub/product/style1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sub/product/style1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '1161908091595cfe0a96bae3-34343661');
content_595cfe0a97e8f3_88674368($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "sub/product/style1.tpl" */?>
            <?php }?>
          
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="ps_sortPagiBar bottom">
    
      <?php /*  Call merged included template "_partials/pagination.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, '1161908091595cfe0a96bae3-34343661');
content_595cfe0a9b8b23_97581903($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/pagination.tpl" */?>
    
  </div>
  
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:56:10
         compiled from "/home/crystalsdx/www/themes/foliage/templates/sub/product/style1.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595cfe0a97e8f3_88674368')) {function content_595cfe0a97e8f3_88674368($_smarty_tpl) {?><article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container">
    <div class="left-block">
      
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
          <img src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" >
        </a>
      
      <div class="product-list-actions">
          
            
              <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                  <a
                    class = "add-to-cart"
                    href  = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
                    rel   = "nofollow"
                    data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                    data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
                    data-link-action="add-to-cart"
                    title = "<?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
                  ><i class="material-icons">shopping_cart</i></a>              
              <?php } else { ?>
                  <a
                    class = "add-to-cart"
                    href  = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                    rel   = "nofollow"
                    title = "<?php echo smartyTranslate(array('s'=>'Select option','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
                  ><i class="material-icons">file_download</i></a>
              <?php }?>
              <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

          
        
        <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview" title="<?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
">
          <i class="material-icons">zoom_in</i> <!-- <?php echo smartyTranslate(array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
 -->
        </a>
      </div>
      

      
        <ul class="product-flags">
          <?php  $_smarty_tpl->tpl_vars['flag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['flags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->key => $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->_loop = true;
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
          <?php } ?>
        </ul>
      
    </div>
    <div class="right-block product-description  clearfix">
      
        <div class="product-price-and-shipping">
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

          <?php if (isset($_smarty_tpl->tpl_vars['display_price']->value)&&$_smarty_tpl->tpl_vars['display_price']->value=='0') {?>
          
          <?php } else { ?>
          <span class="price-border">
            <span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
          </span>
          <?php }?>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl);?>


          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>


            <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
            <!--
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
              <span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            -->
          <?php }?>

        </div>
      

      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
          <?php /*  Call merged included template "catalog/_partials/variant-links.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '1161908091595cfe0a96bae3-34343661');
content_595cfe0a9a1ab8_30634518($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/variant-links.tpl" */?>
        <?php }?>
      
      
      <div class="product-meta">
        
          <h2 class="product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],30,'...'), ENT_QUOTES, 'UTF-8');?>
</a></h2>
        
      </div>


      
        <div class="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
      

      

      
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability']) {?>
          
          <span class="product-availability <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      

    </div>
  </div>
</article>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:56:10
         compiled from "/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595cfe0a9a1ab8_30634518')) {function content_595cfe0a9a1ab8_30634518($_smarty_tpl) {?><div class="variant-links">
  <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
       
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php } ?>
  <span class="js-count count"></span>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:56:10
         compiled from "/home/crystalsdx/www/themes/foliage/templates/_partials/pagination.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595cfe0a9b8b23_97581903')) {function content_595cfe0a9b8b23_97581903($_smarty_tpl) {?>
<nav class="pagination">
  
  <div>
    <ul class="page-list clearfix text-xs-center">
      <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
          <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='spacer') {?>
            <span class="spacer">&hellip;</span>
          <?php } else { ?>
            <a
              rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next<?php } else { ?>nofollow<?php }?>"
              href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
              class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>next <?php }?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true)), ENT_QUOTES, 'UTF-8');?>
"
            >
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type']==='previous') {?>
                <i class="material-icons">keyboard_arrow_left</i><?php echo smartyTranslate(array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

              <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type']==='next') {?>
                <?php echo smartyTranslate(array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
<i class="material-icons">keyboard_arrow_right</i>
              <?php } else { ?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
            </a>
          <?php }?>
        </li>
      <?php } ?>
    </ul>
  </div>

</nav>
<?php }} ?>
