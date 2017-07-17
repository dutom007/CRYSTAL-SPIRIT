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

<div id="blog-localengine">
		<h3>{l s='Comments' d='Shop.Theme'}</h3>
		
		<div class="comments">
			{foreach from=$comments item=comment name=comment} {$default=''}
			<div class="comment-item" id="comment{$comment.id_comment|escape:'html':'UTF-8'}">
				<img src="http://www.gravatar.com/avatar/{md5(strtolower(trim($comment.email|escape:'html':'UTF-8')))}?d={urlencode($default|escape:'html':'UTF-8')}&s=60" align="left"/>
				<div class="comment-wrap">
					<div class="comment-meta">
						<span class="comment-created">{l s='Created On' d='Shop.Theme'}<span> {strtotime($comment.date_add)|date_format:"%A, %B %e, %Y"|escape:'html':'UTF-8'}</span></span>
						<span class="comment-postedby">{l s='Posted By' d='Shop.Theme'}<span> {$comment.user|escape:'html':'UTF-8'}</span></span>
						<span class="comment-link"><a href="{$blog_link|escape:'html':'UTF-8'}#comment{$comment.id_comment|intval}">{l s='Comment Link' d='Shop.Theme'}</a></span>
					</div>

					<div class="comment-content">
						{$comment.comment|nl2br nofilter}{* HTML form , no escape necessary *}
					</div>
				</div>
			</div>
			{/foreach}
			{if $blog_count_comment >10}
			<div class="ps_sortPagiBar clearfix bottom bottom-line">
				{include file="module:psblog/views/templates/front/default/_pagination.tpl"}
	        </div>
	        {/if}
		</div>

		<h3>{l s='Leave your comment' d='Shop.Theme'}</h3>
		<form class="form-horizontal" method="post" id="comment-form" action="{$blog_link|escape:'html':'UTF-8'}" onsubmit="return false;">
			<div class="form-group clearfix">
				<label class="col-lg-3 control-label" for="inputFullName">{l s='Full Name' d='Shop.Theme'}</label>
				<div class="col-lg-9">
					<input type="text" name="user" placeholder="{l s='Your name' d='Shop.Theme'}" id="inputFullName" class="form-control">
				</div>
			</div>

			<div class="form-group clearfix">
				<label class="col-lg-3 control-label" for="inputEmail">{l s='Email' d='Shop.Theme'}</label>
				<div class="col-lg-9">
					<input type="text" name="email"  placeholder="{l  s='Your email' d='Shop.Theme'}" id="inputEmail" class="form-control">
				</div>
			</div>
			
			<div class="form-group clearfix">
				<label class="col-lg-3 control-label" for="inputComment">{l  s='Comment' d='Shop.Theme'}</label>
				<div class="col-lg-9">
					<textarea type="text" name="comment" rows="6"  placeholder="{l  s='Write a comment...' d='Shop.Theme'}" id="inputComment" class="form-control"></textarea>
				</div>
			</div>
			 <div class="form-group clearfix">
			 	<label class="col-lg-3 control-label" for="inputEmail">{l s='Captcha' d='Shop.Theme'}</label>
			 	<div class="col-lg-8 col-md-8 ipts-captcha">
			 		 <img src="{$captcha_image|escape:'html':'UTF-8'}" class="comment-capcha-image" align="left"/>
				 	<input class="form-control" type="text" name="captcha" value="" size="10"  />
				</div>
			 </div>
			 <input type="hidden" name="id_psblog_blog" value="{$id_psblog_blog|intval}">
			<div class="form-group clearfix">
				<div class="col-lg-12 col-lg-offset-3"><button class="btn btn-send btn-default" name="submitcomment" type="submit"><i class="material-icons">done</i>{l s='SEND' d='Shop.Theme'}</button></div>
			</div>
		</form>
</div>