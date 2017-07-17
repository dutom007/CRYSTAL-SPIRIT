{*
* History:
*
* 1.0 - First version
* 1.6 - compatibility with prestashop 1.6
* 1.7.0 - compatibility with prestashop 1.7
*
*  @author    Vincent MASSON <contact@coeos.pro>
*  @copyright Vincent MASSON <www.coeos.pro>
*  @license   http://www.coeos.pro/fr/content/3-conditions-generales-de-ventes
*}

{if isset($smarty.get.tab)}
<h1><img src="{$path|escape:'htmlall':'UTF-8'}logo.png"/> {$displayname|escape:'htmlall':'UTF-8'} (v. {$version|escape:'htmlall':'UTF-8'}) {l s='by' mod='checkvat'} MassonVincent</h1>
<a href="http://addons.prestashop.com/{$iso_code|escape:'htmlall':'UTF-8'}/ratings.php" target="_blank" style="float:right;margin-right:100px;">
<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/rating.png" style="margin-right:3px" title="{l s='Evaluation' mod='checkvat'}" alt="{l s='Evaluation' mod='checkvat'}"/>
<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/rating.png" style="margin-right:3px" title="{l s='Evaluation' mod='checkvat'}" alt="{l s='Evaluation' mod='checkvat'}"/>
<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/rating.png" style="margin-right:3px" title="{l s='Evaluation' mod='checkvat'}" alt="{l s='Evaluation' mod='checkvat'}"/>
<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/rating.png" style="margin-right:3px" title="{l s='Evaluation' mod='checkvat'}" alt="{l s='Evaluation' mod='checkvat'}"/>
<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/rating.png" style="margin-right:3px" title="{l s='Evaluation' mod='checkvat'}" alt="{l s='Evaluation' mod='checkvat'}"/>
</a>
<p><b>{l s='This module allows you to change the customer group manually or automatically if the customers have a VAT number.' mod='checkvat'}</b></p>
<br/><br/>
{/if}