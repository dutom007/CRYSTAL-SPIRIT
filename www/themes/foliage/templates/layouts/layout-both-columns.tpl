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
<!doctype html>
<html lang="{$language.iso_code}" dir="{if $language.is_rtl}rtl{else}ltr{/if}" class="{if $language.is_rtl}rtl{/if}">

  <head>
    {block name='head'}
      {include file='_partials/head.tpl'}
    {/block}
  </head>

  <body id="{$page.page_name}" class="{$page.body_classes|classnames}">
    <div class="row-offcanvas row-offcanvas-left {if isset($DEFAUTL_LAYOUT)}layout-{$DEFAUTL_LAYOUT}{/if}" id="page">
        {hook h='displayAfterBodyOpeningTag'}
        <div class="sidebar-offcanvas ps-mobile-megamenu" id="_mobile_menu"></div>
        <main>
          {block name='product_activation'}
            {include file='catalog/_partials/product-activation.tpl'}
          {/block}
          <header id="header" class="header-default">
            {block name='header'}
              {include file='_partials/header.tpl'}
            {/block}
          </header>
          {block name='notifications'}
            {include file='_partials/notifications.tpl'}
          {/block}
          <div id="wrapper">
              {if Configuration::get('PTS_CP_ENABLE_PBUILDER')&&isset($PTS_PAGEBUILDER_ACTIVED)&&$PTS_PAGEBUILDER_ACTIVED&&$PTS_PAGEBUILDER_FULL}
                {$PTS_PAGEBUILDER_CONTENT nofilter}
              {else}
                  {block name='breadcrumb'}
                    {include file='_partials/breadcrumb.tpl'}
                  {/block}
                  <div class="container">
                    <div class="row">
                      {block name="left_column"}
                        <div id="left-column" class="sidebar col-xs-12 col-sm-12 col-md-12 col-lg-3">
                          {if $page.page_name == 'product'}
                            {hook h='displayLeftColumnProduct'}
                          {else}
                            {hook h="displayLeftColumn"}
                          {/if}
                        </div>
                      {/block}

                      {block name="content_wrapper"}
                        <div id="content-wrapper" class="left-column right-column col-sm-12 col-md-12 col-lg-6">
                          {block name="content"}
                            <p>Hello world! This is HTML5 Boilerplate.</p>
                          {/block}
                        </div>
                      {/block}

                      {block name="right_column"}
                        <div id="right-column" class="sidebar col-xs-12 col-sm-12 col-md-12 col-lg-3">
                          {if $page.page_name == 'product'}
                            {hook h='displayRightColumnProduct'}
                          {else}
                            {hook h="displayRightColumn"}
                          {/if}
                        </div>
                      {/block}
                    </div>
                  </div>
              {/if}
          </div>
          
          {if $page.page_name == "product"}
            <div class="relatedproduct">
              <div class="container">
                <div class="row">
                  {block name='product_footer'}
                    {hook h='displayFooterProduct' product=$product category=$category}
                  {/block}
                </div>
              </div>
            </div>
          {/if}

          <footer id="footer">
            {block name="footer"}
              {include file="_partials/footer.tpl"}
            {/block}
          </footer>

        </main>
      </div>
    
        {block name='javascript_bottom'}
           {include file="_partials/javascript.tpl" javascript=$javascript.bottom}
        {/block}
    
        {hook h='displayBeforeBodyClosingTag'}
      <a id="to_top" class="hidden-md-down" href="javascript:;" title="{l s='Back Top' d='Shop.Theme.Actions'}" style="display: block;"><span class="material-icons">navigation</span></a>
  </body>

</html>
