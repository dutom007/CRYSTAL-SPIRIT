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
{block name='brand'}
  <li class="brand row">
    <div class="brand-img col-xl-3 col-lg-3 col-xs-12"><a href="{$brand.url}"><img src="{$brand.image}" alt="{$brand.name}"></a></div>
    <div class="brand-infos col-xl-6 col-lg-6 col-xs-12">
      <h2><a href="{$brand.url}">{$brand.name}</a></h3>
      {$brand.text nofilter}
    </div>
    <div class="brand-products text-xs-center col-xl-3 col-lg-3 col-xs-12">
      <a style="margin-bottom: 10px;" href="{$brand.url}">{$brand.nb_products}</a>
      <a class="btn btn-primary" style="margin-top: 10px;" href="{$brand.url}">{l s='View products' d='Shop.Theme.Actions'}</a>
    </div>
  </li>
{/block}