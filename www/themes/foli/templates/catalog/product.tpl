{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file=$layout}

{block name='head_seo' prepend}
  <link rel="canonical" href="{$product.canonical_url}">
{/block}

{block name='head' append}
  <meta property="og:type" content="product">
  <meta property="og:url" content="{$urls.current_url}">
  <meta property="og:title" content="{$page.meta.title}">
  <meta property="og:site_name" content="{$shop.name}">
  <meta property="og:description" content="{$page.meta.description}">
  <meta property="og:image" content="{$product.cover.large.url}">
  <meta property="product:pretax_price:amount" content="{$product.price_tax_exc}">
  <meta property="product:pretax_price:currency" content="{$currency.iso_code}">
  <meta property="product:price:amount" content="{$product.price_amount}">
  <meta property="product:price:currency" content="{$currency.iso_code}">
  {if isset($product.weight) && ($product.weight != 0)}
  <meta property="product:weight:value" content="{$product.weight}">
  <meta property="product:weight:units" content="{$product.weight_unit}">
  {/if}
{/block}

{block name='content'}

  <section id="main" itemscope itemtype="https://schema.org/Product">
    <meta itemprop="url" content="{$product.url}">

    <div class="row clearfix">
      <div class="col-md-6">
        {block name='page_content_container'}
          <section class="page-content" id="content">
            {block name='page_content'}
              {block name='product_flags'}
                <ul class="product-flags">
                  {foreach from=$product.flags item=flag}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                  {/foreach}
                </ul>
              {/block}

              {block name='product_cover_tumbnails'}
                {include file='catalog/_partials/product-cover-thumbnails.tpl'}
              {/block}
              <div class="scroll-box-arrows">
                <i class="material-icons left">keyboard_arrow_left</i>
                <i class="material-icons right">keyboard_arrow_right</i>
              </div>

            {/block}
          </section>
        {/block}
        </div>
        <div class="col-md-6">
          {block name='product_prices'}
            {include file='catalog/_partials/product-prices.tpl'}
          {/block}

          {block name='page_header_container'}
            {block name='page_header'}
              <h1 class="h1 product-name-detail" itemprop="name">{block name='page_title'}{$product.name}{/block}</h1>
            {/block}
          {/block}
          

          {block name='product-information-top'}
            {include file="catalog/_partials/product-info-top.tpl"}
          {/block}
          

          <div class="product-information">
            {block name='product_description_short'}
              <div id="product-description-short-{$product.id}" itemprop="description">
                <div class="product-description-short">
                  <span class="label">{l s='Information:' d='Shop.Theme.Catalog'}</span>
                  {$product.description_short nofilter}
                </div>
              </div>
            {/block}

            {if $product.is_customizable && count($product.customizations.fields)}
              {block name='product_customization'}
                {include file="catalog/_partials/product-customization.tpl" customizations=$product.customizations}
              {/block}
            {/if}

            <div class="product-actions">
              {block name='product_buy'}
                <form action="{$urls.pages.cart}" method="post" id="add-to-cart-or-refresh">
                  <input type="hidden" name="token" value="{$static_token}">
                  <input type="hidden" name="id_product" value="{$product.id}" id="product_page_product_id">
                  <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">

                  {block name='product_variants'}
                    {include file='catalog/_partials/product-variants.tpl'}
                  {/block}

                  {block name='product_pack'}
                    {if $packItems}
                      <section class="product-pack">
                        <h3 class="h4">{l s='This pack contains' d='Shop.Theme.Catalog'}</h3>
                        {foreach from=$packItems item="product_pack"}
                          {block name='product_miniature'}
                            {include file='catalog/_partials/miniatures/pack-product.tpl' product=$product_pack}
                          {/block}
                        {/foreach}
                    </section>
                    {/if}
                  {/block}

                  {block name='product_discounts'}
                    {include file='catalog/_partials/product-discounts.tpl'}
                  {/block}

                  {block name='product_add_to_cart'}
                    {include file='catalog/_partials/product-add-to-cart.tpl'}
                  {/block}

                  {hook h='displayProductButtons' product=$product}

                  {block name='product_refresh'}
                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="{l s='Refresh' d='Shop.Theme.Actions'}">
                  {/block}
                </form>
              {/block}

            </div>
          </div>
        </div>
    </div>

    <div class="tabs tabs-info clearfix">
        <ul class="nav nav-tabs">
            {if $product.description}
                <li class="nav-item">
                  <a class="nav-link{if $product.description} active{/if}" data-toggle="tab" href="#description">{l s='Description' d='Shop.Theme.Catalog'}</a>
                </li>
            {/if}
			<!-- Si les détails existe on display  -->
			{if $product.details }
                <li class="nav-item">
                  <a class="nav-link{if !$product.description} active{/if}" data-toggle="tab" href="#product-details">{l s='Product Details' d='Shop.Theme.Catalog'}</a>
                </li>
			{/if}
            {if $product.attachments}
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#attachments">{l s='Attachments' d='Shop.Theme.Catalog'}</a>
                </li>
            {/if}
            {foreach from=$product.extraContent item=extra key=extraKey}
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#extra-{$extraKey}">{$extra.title}</a>
                </li>
            {/foreach}
        </ul>
        <div class="tab-content" id="tab-content">
            <div class="tab-pane fade in{if $product.description} active{/if}" id="description">
                {block name='product_description'}
                    <div class="product-description">{$product.description nofilter}</div>
                {/block}
            </div>
		
            {foreach from=$product.extraContent item=extra key=extraKey}
                <div class="tab-pane fade in {$extra.attr.class}" id="extra-{$extraKey}" {foreach $extra.attr as $key => $val} {$key}="{$val}"{/foreach}>
                    {$extra.content nofilter}
                </div>
            {/foreach}
        </div>
    </div>
    {block name='product_accessories'}
        {if $accessories}
            <div class="product-accessories clearfix block">
              <h3 class="title_block">{l s='Related Products' d='Shop.Theme.Catalog'}</h3>
              <div class="products">
                {if Configuration::get('PTS_CP_PRODUCTS_ITEMROW')}
                    {$columns = Configuration::get('PTS_CP_PRODUCT_ACCROW')}
                {else}
                    {$columns = 4}
                {/if}
                {$nbr_desktops = 2}
                {$nbr_tablets = 2}
                {$nbr_mobile = 1}
                {if isset($columns)}
                    {assign var='nbItemsPerLine' value=12/$columns}
                {else}
                    {assign var='columns' value=4}
                    {assign var='nbItemsPerLine' value=4}
                {/if}
                {if isset($nbr_desktops)}
                    {assign var='nbItemsPerLineDesktop' value=12/$nbr_desktops}
                {else}
                    {assign var='nbItemsPerLineDesktop' value=4}
                {/if}
                {if isset($nbr_tablets)}
                    {assign var='nbItemsPerLineTablet' value=12/$nbr_tablets}
                {else}
                    {assign var='nbItemsPerLineTablet' value=2}
                {/if}
                {if isset($nbr_mobile)}
                    {assign var='nbItemsPerLineMobile' value=12/$nbr_mobile}
                {else}
                    {assign var='nbItemsPerLineMobile' value=1}
                {/if}
                 <div class="owl-carousel products-block grid {if isset($product_style) && !empty($product_style)}{$product_style}{else}style1{/if}">
                    <div class="row flexRow owl-wrapper">
                        {foreach from=$accessories item="product_accessory"}
                            <div class="owl-item col-lg-{$nbItemsPerLine|escape:'html':'UTF-8'} col-md-{$nbItemsPerLineDesktop|escape:'html':'UTF-8'} 
                            col-sm-{$nbItemsPerLineTablet|escape:'html':'UTF-8'} col-xs-{$nbItemsPerLineMobile|escape:'html':'UTF-8'}">
                                <div class="item">
                                    {if isset($product_style) && !empty($product_style)}
                                        {block name='product_miniature'}
                                          {include file='sub/product/{$product_style}.tpl' product=$product_accessory class=''}
                                        {/block}
                                      {else}
                                        {block name='product_miniature'}
                                          {include file='sub/product/style1.tpl' product=$product_accessory class=''}
                                        {/block}
                                      {/if}
                                </div>
                            </div>
                        {/foreach}
                    </div>      
                </div>                 
              </div>
            </div>
        {/if}
    {/block}

    

    {block name='product_images_modal'}
      {include file='catalog/_partials/product-images-modal.tpl'}
    {/block}

    {block name='page_footer_container'}
      <footer class="page-footer">
        {block name='page_footer'}
          <!-- Footer content -->
        {/block}
      </footer>
    {/block}
  </section>

{/block}