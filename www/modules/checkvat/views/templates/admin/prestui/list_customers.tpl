{*
* History:
*
* 1.0 - First version
* 1.6 - compatibility with prestashop 1.6
* 1.7.0 - compatibility with prestashop 1.7
*
*  @author    Vincent MASSON <contact@coeos.pro>
*  @copyright Vincent MASSON <www.coeos.pro>
*  @license   http://www.coeos.pro/boutique/fr/content/3-conditions-generales-de-ventes
*}

{if !empty($liste_customer_pro)}
<ps-panel icon="icon-cogs" header="{l s='customers waiting for validation' mod='checkvat'}">

<fieldset>
	<legend>
	{if !empty($liste_customer_pro)}{l s='customers waiting for validation' mod='checkvat'}{else}{l s='all customers' mod='checkvat'}{/if}</legend>

	<table id="table_customer">
	<tr>
		<th>id_customer</th>
		<th>{l s='shop' mod='checkvat'} (id)</th>
		<th>{l s='first name' mod='checkvat'}</th>
		<th>{l s='name' mod='checkvat'}</th>
		<th>{l s='e-mail' mod='checkvat'}</th>
		<th>{l s='country' mod='checkvat'} ({l s='ISO Code' mod='checkvat'})</th>
		<th>{l s='VAT number' mod='checkvat'}</th>
		<th>{l s='actions' mod='checkvat'}</th>
	</tr>

	{foreach from=$liste_customer_pro item=value_customer}
		
		<tr style="background-color:#{if $value_customer.id_default_group neq $list_id_group_for_an_iso_code.{$value_customer.iso_code|escape:'htmlall':'UTF-8'}.id_group}FAE2E3{else}DFFAD3{/if}">
		
			<td>{$value_customer.id_customer|escape:'htmlall':'UTF-8'}</td>
			<td>{$value_customer.name|escape:'htmlall':'UTF-8'} ({$value_customer.id_shop|escape:'htmlall':'UTF-8'})</td>
			<td>{$value_customer.firstname|escape:'htmlall':'UTF-8'}</td>
			<td>{$value_customer.lastname|escape:'htmlall':'UTF-8'}</td>
			<td>{$value_customer.email|escape:'htmlall':'UTF-8'}</td>
			<td>{$value_customer.pays|escape:'htmlall':'UTF-8'} ({$value_customer.iso_code|escape:'htmlall':'UTF-8'})</td>
			<td>{$value_customer.vat_number|escape:'htmlall':'UTF-8'} 
				<a target="_blank" href="index.php?tab=AdminAddresses&id_address={$value_customer.id_address|escape:'htmlall':'UTF-8'}&updateaddress&token={$token_addresses|escape:'htmlall':'UTF-8'}">
					<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/edit.gif" alt="{l s='Customer' mod='checkvat'}" title="{l s='Customer' mod='checkvat'}"/>
				</a>
			</td>
			<td>
				<a href ="index.php?tab=AdminCustomers&id_customer={$value_customer.id_customer|escape:'htmlall':'UTF-8'}&updatecustomer&token={$token_customer|escape:'htmlall':'UTF-8'}">
					<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/customer.gif" alt="{l s='Customer' mod='checkvat'}" title="{l s='Customer' mod='checkvat'}"/>
				</a>
				<a style="text-decoration: none;" target="_blank" href="http://ec.europa.eu/taxation_customs/vies/vatResponse.html?locale=
				{$id_lang_locale|escape:'htmlall':'UTF-8'}&memberStateCode={if $value_customer.iso_code == 'GR'}EL{else}{$value_customer.iso_code|escape:'htmlall':'UTF-8'}{/if}&number=
				{$value_customer.vat_number|substr:2|escape:'htmlall':'UTF-8'}{if $value_customer.iso_code == 'ES' || $value_customer.iso_code == 'GR'}&traderName={/if}">
					<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/logo.gif" alt="{l s='Validation "VIES" of the VAT number' mod='checkvat'}" title="{l s='Validation "VIES" of the VAT number' mod='checkvat'}"/>
				</a>	
				{if $value_customer.id_default_group neq $list_id_group_for_an_iso_code.{$value_customer.iso_code|escape:'htmlall':'UTF-8'}.id_group}
					<a href="{$url|escape:'htmlall':'UTF-8'}&validerClient={$value_customer.id_customer|escape:'htmlall':'UTF-8'}">
						<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/validate.png" alt="{l s='Validate' mod='checkvat'}" title="{l s='Validate' mod='checkvat'}"/>
					</a>
				{/if}
				
				<a href="{$url|escape:'htmlall':'UTF-8'}&retirerclient={$value_customer.id_customer|escape:'htmlall':'UTF-8'}">
					<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/delete.gif" alt="{l s='Removing the group' mod='checkvat'}" title="{l s='Removing the group' mod='checkvat'}"/>
				</a>
			</td>
		</tr>
	{/foreach}
	</table><br/>

	<p><div style="float:left;margin-right:5px;width:40px;height:15px;background-color:#FAE2E3;border: 1px solid #999999;"></div>
		{l s='customer account to validate' mod='checkvat'}
	</p>
	<p><div style="float:left;margin-right:5px;width:40px;height:15px;background-color:#DFFAD3;border: 1px solid #999999;"></div>
		{l s='customer account already validated' mod='checkvat'}
	</p>
	

	{if $nbre_page > 1}
		<select name="page" style="width: 100px;" onchange="document.location.href = \'{$url|escape:'htmlall':'UTF-8'}&page=\' + this.value">
		{for $i = 0 to $nbre_page}<option {if $page eq $i}selected="selected"{/if} value="{$i|escape:'htmlall':'UTF-8'}">{l s='Page' mod='checkvat'} {$i + 1|escape:'htmlall':'UTF-8'}</option>{/for}
		</select>
	{/if}
</fieldset>
</ps-panel>
{/if}