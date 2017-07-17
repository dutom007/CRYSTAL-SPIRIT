{*
* Pts Prestashop Theme Framework for Prestashop 1.6.x
*
* @package   pspagebuilder
* @version   5.0
* @author    http://www.prestabrain.com
* @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
*               <info@prestabrain.com>.All rights reserved.
* @license   GNU General Public License version 2
*}
{if isset($thumbnailurl)}
<div class="widget-images block {$addition_cls|escape:'html':'UTF-8'} {if isset($stylecls)&&$stylecls}block-{$stylecls|escape:'html':'UTF-8'}{/if} {$animation|escape:'html':'UTF-8'}">
	{if isset($widget_heading)&&!empty($widget_heading)}
	<h4 class="title_block">
		{$widget_heading|escape:'html':'UTF-8'}
	</h4>
	{/if}
	<div class="widget-inner block_content clearfix">
		 <div class="image-item">
			 	<a href="{if $link_url}{$link_url|escape:'htmlall':'UTF-8'}{else}#{/if}" class="pts-btnlink img-animation" title="{l s='Large Image' d='Shop.Theme'}">
			 		<img src="{$thumbnailurl|escape:'html':'UTF-8'}" alt="" />
			 	</a>
		 </div>
	</div>
</div>
{/if} 