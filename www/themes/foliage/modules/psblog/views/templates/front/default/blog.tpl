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

{extends file=$layout}

{block name='content'}

	{if isset($error)}
			<div id="blogpage">
				<div class="blog-detail">
					<div class="alert alert-warning">{l s='Sorry, We are updating data, please come back later!!!!' d='Shop.Theme'}</div>
				</div>
			</div>
		{else}	
		<div id="blogpage">
			<article class="blog-detail">
				{if $is_active}

				{if $blog->preview_url && $config->get('item_show_image','1')}
					<div class="blog-image">
						<img src="{$blog->preview_url|escape:'html':'UTF-8'}" title="{$blog->meta_title|escape:'html':'UTF-8'}" class="img-fluid" />
					</div>
				{/if}

				<h1 class="blog-title">{$blog->meta_title|escape:'html':'UTF-8'}</h1>

				<div class="blog-meta">
					{if $config->get('item_show_author','1')}
					<span class="blog-author">
						<span> {l s='Posted By' d='Shop.Theme'}: </span>
						<a href="{$blog->author_link|escape:'html':'UTF-8'}" title="{$blog->author|escape:'html':'UTF-8'}">{$blog->author|escape:'html':'UTF-8'}</a>
					</span>
					{/if}

					{if $config->get('item_show_category','1')}
					<span class="blog-cat"> 
						<span> {l s='In' d='Shop.Theme'}: </span> 
						<a href="{$blog->category_link|escape:'html':'UTF-8'}" title="{$blog->category_title|escape:'html':'UTF-8'}">{$blog->category_title|escape:'html':'UTF-8'}</a>
					</span>
					{/if}

					{if $config->get('item_show_created','1')}
					<span class="blog-created">
						<span> {l s='On' d='Shop.Theme'}: </span> 
						<time class="date" datetime="{strtotime($blog->date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
							{l s=strtotime($blog->date_add)|date_format:"%A"|escape:'html':'UTF-8' d='Shop.Theme'},	<!-- day of week -->
							{l s=strtotime($blog->date_add)|date_format:"%B"|escape:'html':'UTF-8' d='Shop.Theme'}		<!-- month-->
							{l s=strtotime($blog->date_add)|date_format:"%e"|escape:'html':'UTF-8' d='Shop.Theme'},	<!-- day of month -->
							{l s=strtotime($blog->date_add)|date_format:"%Y"|escape:'html':'UTF-8' d='Shop.Theme'}		<!-- year -->
						</time>
					</span>
					{/if}
					
					{if isset($blog_count_comment)&&$config->get('item_show_counter','1')}
					<span class="blog-ctncomment">
						<span> {l s='Comment' d='Shop.Theme'}:</span> 
						{$blog_count_comment|intval}
					</span>
					{/if}
					{if isset($blog->hits)&&$config->get('item_show_hit','1')}
					<span class="blog-hit">
						<span> {l s='Hit' d='Shop.Theme'}:</span>
						{$blog->hits|intval}
					</span>
					{/if}
				</div>

				

				<div class="blog-description">
					{if $config->get('item_show_description',1)}
						{$blog->description nofilter}{* HTML form , no escape necessary *}
					{/if}
					{$blog->content nofilter}{* HTML form , no escape necessary *}
				</div>
				
				

				{if trim($blog->video_code)}
				<div class="blog-video-code">
					<div class="inner ">
						{$blog->video_code nofilter}{* HTML form , no escape necessary *}
					</div>
				</div>
				{/if}

				<div class="social-share">
					 {include file="module:psblog/views/templates/front/default/_social.tpl"}
				</div>
				{if $tags}
				<div class="blog-tags">
					<span>{l s='Tags:' d='Shop.Theme'}</span>
				 
					{foreach from=$tags item=tag name=tag}
						 <a href="{$tag.link|escape:'html':'UTF-8'}" title="{$tag.tag|escape:'html':'UTF-8'}"><span>{$tag.tag|escape:'html':'UTF-8'}</span></a>
					{/foreach}
					 
				</div>
				{/if}

				{if !empty($samecats)||!empty($tagrelated)}
				<div class="extra-blogs row">
				{if !empty($samecats)}
					<div class="col-lg-6 col-md-6 col-xs-12">
						<h4>{l s='In Same Category' d='Shop.Theme'}</h4>
						<ul>
						{foreach from=$samecats item=cblog name=cblog}
							<li><a href="{$cblog.link|escape:'html':'UTF-8'}">{$cblog.meta_title|escape:'html':'UTF-8'}</a></li>
						{/foreach}
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-12">
						<h4>{l s='Related by Tags' d='Shop.Theme'}</h4>
						<ul>
						{foreach from=$tagrelated item=cblog name=cblog}
							<li><a href="{$cblog.link|escape:'html':'UTF-8'}">{$cblog.meta_title|escape:'html':'UTF-8'}</a></li>
						{/foreach}
						</ul>
					</div>
				{/if}
				</div>
				{/if}

				{if $productrelated}

				{/if}
				<div class="blog-comment-block">
				{if $config->get('item_comment_engine','local')=='facebook'}
					{include file="module:psblog/views/templates/front/default/_facebook_comment.tpl"}
				{elseif $config->get('item_comment_engine','local')=='diquis'}
					{include file="module:psblog/views/templates/front/default/_diquis_comment.tpl"}
				
				{else}
					{include file="module:psblog/views/templates/front/default/_local_comment.tpl"}
				{/if}
				</div>	
				{else}
				<div class="alert alert-warning">{l s='Sorry, This blog is not avariable. May be this was unpublished or deleted.' d='Shop.Theme'}</div>
				{/if}

			</article>
		</div>
		{/if}

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
{/block}