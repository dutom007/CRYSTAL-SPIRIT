{**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

 {if !isset($header_cp)}
  {$header_cp = Configuration::get('PTS_CP_HEADER')}
{/if}


{if $header_cp && file_exists("$CURRENT_THEMEDIR./templates/sub/headers/{$header_cp}.tpl")}
  {if $header_cp == 'header1'}
    {include file='sub/headers/header1.tpl' }
  {elseif $header_cp == 'header2' }
    {include file='sub/headers/header2.tpl'}
  {/if}
{else}
<div class="header-default">
{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
        <div class="hidden-md-down">
          
        </div>
        <div class="hidden-lg-up text-xs-center header-mobile mobile"> 
          <button class="btn canvas-menu float-xs-left" data-toggle="offcanvas" type="button"><span class="material-icons">dehaze</span>
          </button> 
          
          <div class="float-xs-right" id="_mobile_currency_selector"></div>
          <div class="float-xs-right" id="_mobile_language_selector"></div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="text-xs-center" id="_mobile_search"></div>                  

        </div>
    </div>
  </nav>
{/block}
{block name='header_top'}
  <div class="header-top ">
    <div class="header-content">
      <div class="container">
        <div class="row">
          <div class="float-xs-left col-lg-3  hidden-md-down" id="_desktop_logo">
            <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
              <a href="{$urls.base_url}" title="{$shop.name}">
                <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
              </a>
            </div>
          </div>
          <div class="position-static hidden-md-down header-right col-xs-12 col-sm-12 col-md-9 col-lg-9">
           
            {hook h='displayTop'}
            {if class_exists('PtsthemePanel')}
                {plugin module='ps_shoppingcart' hook='displayTop'}   
            {/if}
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="ps_megamenu  hidden-md-down">
      <div class="container">
        <div class="row">
          <div id="_desktop_menu" class="ps-desktop-megamenu position-static col-lg-8">
              {hook h="displayMainmenu"} 
          </div>
           {if class_exists('PtsthemePanel')}
              <div id="_desktop_search" class="col-lg-4">
                {plugin module='ps_searchbar' hook='displayTop'}
              </div>    
            {/if}
        </div>
      </div>
    </div>
    
      
    </div> 
  {hook h='displayNavFullWidth'}
{/block}
</div>
{/if}
