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
<div class="blog_container clearfix">
	{if $item.image && $show_image}
	<div class="blog-image">
		<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="link">
			<img src="{$item.preview_url|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="img-responsive"/>
		</a>
	</div>
	{/if}
	<div class="blog-content">
		{if $show_title_blog}
			<h5>
				<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}">{$item.title|escape:'html':'UTF-8'}</a>
			</h5>
		{/if}
		<div class="blog-meta">
			{if $show_category}
				<span class="blog-cat"> <span class="meta-label">{l s='In:' d='Shop.Theme'}</span> 
					<a href="{$item.category_link|escape:'html':'UTF-8'}" title="{$item.category_title|escape:'html':'UTF-8'}">{$item.category_title|escape:'html':'UTF-8'}</a>
				</span>
			{/if}
			{if $show_dateadd}
				<span class="blog-created"><span class="meta-label">{l s='Time:' d='Shop.Theme'}</span>
					{strtotime($item.date_add)|escape:'html':'UTF-8'|date_format:"%D"}
				</span>
			{/if}
			{if $show_comment}<span class="blog-ctncomment">
				<span class="meta-label"> {l s='Comment:' d='Shop.Theme'}:</span> {$item.comment_count|escape:'html':'UTF-8'}</span>
			{/if}
		</div>
		
		{if $show_description}
			<div class="blog-shortinfo">
				{$item.description|strip_tags|truncate:80|escape:'html':'UTF-8'}
			</div>
		{/if}
		{if $show_readmore}
			<div class="readmore">
				<p>
					<a href="{$item.link|escape:'html':'UTF-8'}" title="{$item.title|escape:'html':'UTF-8'}" class="btn btn-default"><i class="material-icons">trending_flat</i></a>
				</p>
			</div>
		{/if}
	</div>
</div>