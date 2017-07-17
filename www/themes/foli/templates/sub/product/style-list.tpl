{if !empty($products)}
	<article class="product-miniature js-product-miniature media" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
  <div class="thumbnail-container ">
    <div class="left-block pull-left">
      {block name='product_thumbnail'}
        <a href="{$product.url}" class="thumbnail product-thumbnail">
          <img src = "{$product.cover.bySize.small_default.url}" alt = "{$product.cover.legend}" data-full-size-image-url = "{$product.cover.small.url}" >
        </a>
      {/block}
      {block name='product_price_and_shipping'}
        <div class="product-price-and-shipping">
          {hook h='displayProductPriceBlock' product=$product type="before_price"}
         {if $product.has_discount}
            {hook h='displayProductPriceBlock' product=$product type="old_price"}
            <span class="regular-price">{$product.regular_price}</span>
          {/if}
          <span class="price-border">
             <span itemprop="price" class="price">{$product.price}</span>
          </span>
          {hook h='displayProductPriceBlock' product=$product type='unit_price'}
          {hook h='displayProductPriceBlock' product=$product type='weight'}
          

        </div>
      {/block}
    </div>
    <div class="right-block product-description  clearfix media-right">
      <div class="product-meta">
        {block name='product_name'}
          <h4 class="product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h4>
        {/block}
        {if $product.has_discount}
            {if $product.discount_type === 'percentage'}
              <span class="discount discount-percentage">{l s='Sale Off %percentage%' d='Shop.Theme.Catalog' sprintf=['%percentage%' => $product.discount_percentage_absolute]}</span>
            {else}
              <span class="discount discount-amount">{l s='Save %amount%' d='Shop.Theme.Catalog' sprintf=['%amount%' => $product.discount_amount]}</span>
            {/if}
        {/if}
        
      </div>

      {block name='product_description_short'}
        <div class="product-description-short" itemprop="description">{$product.description_short nofilter}</div>
      {/block}
    </div>
  </div>
</article>

{/if}