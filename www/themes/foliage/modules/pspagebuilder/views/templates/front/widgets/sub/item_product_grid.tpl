{*
* Pts Prestashop Theme Framework for Prestashop 1.7.x
*
* @package   pspagebuilder
* @version   6.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2016 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if !isset($product_style)}
  {$product_style = Configuration::get('PTS_CP_PRODUCT_STYLE')}
{/if}
{if isset($product_style) && !empty($product_style)}
  {include file="sub/product/{$product_style}.tpl" product=$product class=''}
{else}
  {include file="sub/product/style1.tpl" product=$product class=''}
{/if}