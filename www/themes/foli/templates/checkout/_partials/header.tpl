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
{block name='header_nav'}
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
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
    </div>
  </nav>
{/block}
{block name='header_top'}
  <div class="header-top  hidden-md-down">
    <div class="container">
      <div class="float-xs-left col-lg-2" id="_desktop_logo">
        <div class="{if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}logo-theme{else}logo-store{/if}">
          <a href="{$urls.base_url}" title="{$shop.name}">
            <img class="logo img-responsive" src="{$shop.logo}" {if Configuration::get('PTS_CP_LOGOTYPE') == 'logo-theme'}hidden{/if} alt="{$shop.name}">
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
              
               {if class_exists('PtsthemePanel')}
                  {plugin module='ps_languageselector' hook='displayTop'}
                  {plugin module='ps_currencyselector' hook='displayTop'} 
              {/if}
            </div>
          </div>
        </div>
         {hook h='displayTop'}  
          <div class="clearfix"></div>
      </div>
      <div id="_desktop_menu" class="ps-desktop-megamenu position-static col-lg-8">
        
          {hook h="displayMainmenu"}
          
      </div>  
      
    </div>
  </div> 
  {hook h='displayNavFullWidth'}
{/block}
