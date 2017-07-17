{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="block_newsletter">
  <div class="row">
    <h2 class=" col-lg-12 title">{l s=' Inspiration in your inbox' d='Shop.Theme'}</h2>
    <div class="newsletter_form">
      <form action="{$urls.pages.index}#footer" method="post">
        <div class="row">
          <div class="col-xs-8 col-sm-9 col-lg-11">
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="{$value}"
                placeholder="{l s='Your email address' d='Shop.Forms.Labels'}"
              >
            </div>
          </div>
          <div class="col-xs-4 col-sm-3 col-lg-1">
            <input
              class="btn float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="{l s='Send' d='Shop.Theme.Actions'}"
            >
            <input
              class="btn hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="{l s='OK' d='Shop.Theme.Actions'}"
            >
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12 clearfix">
              {if $conditions}
                <p>{$conditions}</p>
              {/if}
              {if $msg}
                <p class="alert {if $nw_error}alert-danger{else}alert-success{/if}">
                  {$msg}
                </p>
              {/if}
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
