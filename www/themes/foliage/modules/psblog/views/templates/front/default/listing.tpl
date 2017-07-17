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
	{if isset($no_follow) AND $no_follow}
		{assign var='no_follow_text' value='rel="nofollow"'}
	{else}
		{assign var='no_follow_text' value=''}
	{/if} 
	<div id="blog-listing" class="blogs-container box">
		{if isset($filter.type)}
			{if $filter.type=='tag'}
				<h1>{l s='Filter Blogs By Tag' mod='psblog'} : <span>{$filter.tag|escape:'html':'UTF-8'}</span></h1>
			{elseif $filter.type=='author'}
				<h1>{l s='Filter Blogs By Blogger' mod='psblog'} : <span>{$filter.employee->firstname|escape:'html':'UTF-8'} {$filter.employee->lastname|escape:'html':'UTF-8'}</span></h1>
			{/if}
		
		{/if}

		<div class="inner">
			{if count($leading_blogs)+count($secondary_blogs)>0}
				{if count($leading_blogs)}
				<div class="leading-blog">  
					{foreach from=$leading_blogs item=blog name=leading_blog}
					 
						
						
							
								{include file="module:psblog/views/templates/front/default/_listing_blog.tpl"}
							
						
						
					{/foreach}
				</div>
				{/if}


				{if count($secondary_blogs)}
				<div class="secondary-blog">

					{foreach from=$secondary_blogs item=blog name=secondary_blog}
						{if ($blog@iteration%$listing_secondary_column==1)&&$listing_secondary_column>1}
						  <div class="row">
						{/if}
						<div class="{if $listing_secondary_column<=1}no{/if}col-lg-{floor(12/$listing_secondary_column|escape:'html':'UTF-8')}">
							
							{if $listing_secondary_column > 1}
							{include file="module:psblog/views/templates/front/default/_grid_blog.tpl"}
							{else}
							{include file="module:psblog/views/templates/front/default/_listing_blog.tpl"}
							{/if}
							
							
						</div>	
						{if ($blog@iteration%$listing_secondary_column==0||$smarty.foreach.secondary_blog.last)&&$listing_secondary_column>1}
						</div>
						{/if}
					{/foreach}
				</div>
				{/if}
				<div class="ps_sortPagiBar clearfix bottom bottom-line">	
								{include file="module:psblog/views/templates/front/default/_pagination.tpl"}				
				</div>
			{else}
				<div class="alert alert-warning">{l s='Sorry, We are update data, please come back later!!!!' mod='psblog'}</div>
			{/if}    

		</div>
	</div>
{/block}