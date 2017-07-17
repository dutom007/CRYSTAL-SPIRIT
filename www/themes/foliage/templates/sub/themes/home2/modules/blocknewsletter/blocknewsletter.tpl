
    <div id="newsletter_block_left" class="pts-newsletter style1 block-borderbox">
        <div class="wrap">
            <div class="title_block"><span>{l s='Newsletter' mod='blocknewsletter'}</span></div>
            <div class="block_content clearfix">
                <!-- <div class="text-muted">{l s='Register our news letter for exclusive benefits :' mod='blocknewsletter'}</div> -->
                <form action="{$link->getPageLink('index', null, null, null, false, null, true)|escape:'html':'UTF-8'}" method="post">
                    <div class="input-group newsletter-group">
                        <input class="newsletter-input form-control" id="newsletter-input-footer" type="text" name="email"  placeholder="{if isset($value) && $value}{$value|escape:'html':'UTF-8'}{else}{l s='Enter email adress...' mod='pspagebuilder'}{/if}" />
                        <div class="input-group-btn">
                            <input type="hidden" name="action" value="0" />
                            <button type="submit" class="btn" name="submitNewsletter" >{l s='sends' mod='blocknewsletter'}</button> 
                        </div>
                    </div>
                </form>
                {if isset($msg) && $msg}
                    <p class="{if $nw_error}warning_inline{else}success_inline{/if}">{$msg}</p>
                {/if}
            </div>
        </div>
    </div>