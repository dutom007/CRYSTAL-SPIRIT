
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


<!-- Block Newsletter module-->
    <div id="newsletter_block_left">
        <div class="row">
            <div class="hidden-xs col-sm-4 col-md-4">    
                <h4 class="title_block text-right"><span>{l s='JOIN OUR NEWSLETTERS' mod='blocknewsletter'}</span></h4>
            </div>
            <div class="block_content col-xs-12 col-sm-8 col-md-8 clearfix">
                <form action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
                    <div class="input-group">
                        <input class="inputNew form-control newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="{if isset($msg) && $msg}{$msg}{elseif isset($value) && $value}{$value}{else}{l s='Enter your email here...' mod='blocknewsletter'}{/if}" />
                        <span class="input-group-btn">
                            <button type="submit" name="submitNewsletter" class="btn-newsletter">
                                <!-- <span class="icon icon-envelope"></span> -->
                                <span> {l s='Subscribe now' mod='blocknewsletter'}</span>
                            </button>
                        </span>
                        <input type="hidden" name="action" value="0" />
                    </div>
                </form>             
            </div>
        </div>
    </div>
                    
<!-- /Block Newsletter module-->
{strip}
{if isset($msg) && $msg}
{addJsDef msg_newsl=$msg|@addcslashes:'\''}
{/if}
{if isset($nw_error)}
{addJsDef nw_error=$nw_error}
{/if}
{addJsDefL name=placeholder_blocknewsletter}{l s='Enter your email here...' mod='blocknewsletter' js=1}{/addJsDefL}
{if isset($msg) && $msg}
    {addJsDefL name=alert_blocknewsletter}{l s='Newsletter : %1$s' sprintf=$msg js=1 mod="blocknewsletter"}{/addJsDefL}
{/if}
{/strip}
<script type="text/javascript">
    {literal}
        $('#newsletter_block_left .title_block').click(function(){
            if($(this).parent().hasClass('active'))
                $(this).parent().removeClass('active');
            else
                $(this).parent().addClass('active');
        });
    {/literal}
</script>