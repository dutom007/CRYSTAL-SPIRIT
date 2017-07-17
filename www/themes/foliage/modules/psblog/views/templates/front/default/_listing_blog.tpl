{*
 *  Ps Prestashop SliderShow for Prestashop 1.6.x
 *
 * @package   pssliderlayer
 * @version   3.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 PrestaBrain.com <@emai:prestabrain@gmail.com>
 *               
 * @license   GNU General Public License version 2
*}

<article class="blog-item clearfix">
	<div class="blog-content {if $blog.image && $config->get('listing_show_image',1)} col-lg-5 col-md-5 col-sm-12 col-xs-12{/if}">
		{if $config->get('listing_show_title','1')}
			<h4 class="title"><a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a></h4>
		{/if}

		<div class="blog-meta">
			{if $config->get('listing_show_author','1')&&!empty($blog.author)}
			<span class="blog-author">
				<span> {l s='By' d='Shop.Theme'}:</span> 
				<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
			</span>
			{/if}
			
			{if $config->get('listing_show_category','1')}
			<span class="blog-cat"> 
				<span> {l s='In' d='Shop.Theme'}:</span> 
				<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
			</span>
			{/if}
			
			{if $config->get('listing_show_created','1')}
			<span class="blog-created">
				<span > {l s='Time' d='Shop.Theme'}: </span> 
				{strtotime($blog.date_add)|escape:'html':'UTF-8'|date_format:"%D"}
				
			</span>
			{/if}
			
			{if isset($blog.comment_count)&&$config->get('listing_show_counter','1')}	
			<span class="blog-ctncomment">
				<span> {l s='Comment' d='Shop.Theme'}:</span> 
				{$blog.comment_count|intval}
			</span>
			{/if}

			{if $config->get('listing_show_hit','1')}	
			<span class="blog-hit">
				<span> {l s='Hit' d='Shop.Theme'}:</span> 
				{$blog.hits|intval}
			</span>
			{/if}
		</div>

		<div class="blog-shortinfo">
			{if $config->get('listing_show_description','1')}
			{$blog.description|strip_tags:'UTF-8'|truncate:120:'...' nofilter}{* HTML form , no escape necessary *}
			{/if}
			{if $config->get('listing_show_readmore',1)}
			<p>
				<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="more btn btn-default"><i class="material-icons">fast_forward</i></a>
			</p>
			{/if}
		</div>

	</div>
	
	
	{if $blog.image && $config->get('listing_show_image',1)}
		<div class="blog-image col-xs-12 col-sm-12 col-md-7 col-lg-7">
			<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">
				<img src="{$blog.preview_url|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" alt="" class="img-fluid" />
				<span class="img_effect"></span>
			</a>
		</div>
	{/if}

	
</article>
	
<!---
	Translation Day of Week - NOT REMOVE
	{l s='Sunday' d='Shop.Theme'}
	{l s='Monday' d='Shop.Theme'}
	{l s='Tuesday' d='Shop.Theme'}
	{l s='Wednesday' d='Shop.Theme'}
	{l s='Thursday' d='Shop.Theme'}
	{l s='Friday' d='Shop.Theme'}
	{l s='Saturday' d='Shop.Theme'}
-->
<!---
	Translation Month - NOT REMOVE
		{l s='January' d='Shop.Theme'}
		{l s='February' d='Shop.Theme'}
		{l s='March' d='Shop.Theme'}
		{l s='April' d='Shop.Theme'}
		{l s='May' d='Shop.Theme'}
		{l s='June' d='Shop.Theme'}
		{l s='July' d='Shop.Theme'}
		{l s='August' d='Shop.Theme'}
		{l s='September' d='Shop.Theme'}
		{l s='October' d='Shop.Theme'}
		{l s='November' d='Shop.Theme'}
		{l s='December' d='Shop.Theme'}
-->