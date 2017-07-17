<section class="featured-products  clearfix">
  <h4 class="h1 products-section-title title-sidebar">
    {l s='Popular Products' d='Shop.Theme.Catalog'}
  </h1>
  <div class="products  products-block list list1">
    {foreach from=$products item="product"}
      {include file="sub/product/sidebar.tpl" product=$product}
    {/foreach}
  </div>
  <a class="all-product-link float-xs-left pull-md-right h6" href="{$allProductsLink}">
    {l s='All products' d='Shop.Theme.Catalog'}<i class="material-icons">keyboard_arrow_right</i>
  </a>
</section>