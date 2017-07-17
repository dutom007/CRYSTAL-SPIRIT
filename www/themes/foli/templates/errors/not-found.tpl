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
<section id="content" class="page-content page-not-found">
	<div class="img-404 col-lg-6 col-md-6 col-sm-12 col-xs-12">

	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<h4>{l s='OOPs! Page Not Found.' d='Shop.Theme'}</h4>
		  <p>{l s='The page you are looking for was not found.' d='Shop.Theme'}</p>
		  
			<div class="buttons">
				<a class="btn" href="{$urls.pages.index}" title="{l s='Home'}"><span>{l s='Continue shopping'}</span></a>
				<a class="btn" href="{$link->getPageLink(contact, true)|escape:'html'}" title="{l s='Contact'}"><span>{l s='Contact Us'}</span></a>
			</div>

		  {hook h='displayNotFound'}
	</div>
  
</section>
