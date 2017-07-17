<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:44
         compiled from "/home/crystalsdx/www/themes/foliage/templates/sub/products_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1869766784595cfd008cfe47-12321557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f8dc6acd5237e0aa1c638b3ade7109b6da5e4ae' => 
    array (
      0 => '/home/crystalsdx/www/themes/foliage/templates/sub/products_module.tpl',
      1 => 1491211317,
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
  ),
  'nocache_hash' => '1869766784595cfd008cfe47-12321557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_style' => 0,
    'carousel_style' => 0,
    'items' => 0,
    'columns' => 0,
    'class' => 0,
    'list_mode' => 0,
    'carousel_item' => 0,
    'nbr_desktops' => 0,
    'nbr_tablets' => 0,
    'nbr_mobile' => 0,
    'is_pagebuilder' => 0,
    'list_mode_tpl' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595cfd00940c50_36918699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595cfd00940c50_36918699')) {function content_595cfd00940c50_36918699($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['product_style']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['product_style'] = new Smarty_variable(Configuration::get('PTS_CP_PRODUCT_STYLE'), null, 0);?>
<?php }?>
<div class="<?php if (isset($_smarty_tpl->tpl_vars['carousel_style']->value)&&$_smarty_tpl->tpl_vars['carousel_style']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carousel_style']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> widget-content owl-carousel-play" data-ride="owlcarousel">
 	<?php if (count($_smarty_tpl->tpl_vars['items']->value)>$_smarty_tpl->tpl_vars['columns']->value) {?>
	 	<div class="carousel-controls">
		 	<a class="left carousel-control left_carousel" href="#"><span class="fa  fa-angle-left "></span></a>
			<a class="right carousel-control right_carousel" href="#"><span class="fa fa-angle-right"></span></a>
		</div>
	<?php }?>
	<div class="owl-carousel <?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['list_mode']->value)&&$_smarty_tpl->tpl_vars['list_mode']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['list_mode']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" data-columns="<?php if (isset($_smarty_tpl->tpl_vars['carousel_item']->value)) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['carousel_item']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['columns']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>" data-pagination="false" data-navigation="true"
		<?php if (isset($_smarty_tpl->tpl_vars['nbr_desktops']->value)) {?>data-desktop="[1200,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['nbr_desktops']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
]"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['nbr_tablets']->value)) {?>data-desktopsmall="[992,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['nbr_tablets']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
]"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['nbr_mobile']->value)) {?>data-tablet="[768,<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['nbr_mobile']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
]"<?php }?>
		data-mobile="[480,1]">
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<div class="item">
				<?php if (isset($_smarty_tpl->tpl_vars['is_pagebuilder']->value)) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['list_mode_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value), 0);?>

				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['product_style']->value)&&!empty($_smarty_tpl->tpl_vars['product_style']->value)) {?>
						
              <?php echo $_smarty_tpl->getSubTemplate ('sub/product/{$product_style}.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value,'class'=>''), 0);?>

            
					<?php } else { ?>
						
							<?php /*  Call merged included template "sub/product/style1.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("sub/product/style1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['item']->value,'class'=>''), 0, '1869766784595cfd008cfe47-12321557');
content_595cfd0090f410_00435999($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "sub/product/style1.tpl" */?>
						
					<?php }?>
				<?php }?>
			</div>
		<?php } ?>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:44
         compiled from "/home/crystalsdx/www/themes/foliage/templates/sub/product/style1.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595cfd0090f410_00435999')) {function content_595cfd0090f410_00435999($_smarty_tpl) {?><article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, '1869766784595cfd008cfe47-12321557');
content_595cfd0092e584_19065277($_smarty_tpl);
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
<?php /* Smarty version Smarty-3.1.19, created on 2017-07-05 10:51:44
         compiled from "/home/crystalsdx/www/themes/foliage/templates/catalog/_partials/variant-links.tpl" */ ?>
<?php if ($_valid && !is_callable('content_595cfd0092e584_19065277')) {function content_595cfd0092e584_19065277($_smarty_tpl) {?><div class="variant-links">
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
