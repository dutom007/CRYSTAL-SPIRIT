{*
* History:
*
* 1.0 - First version (only for prestashop 1.4)
* 1.5 - Only for prestashop version 1.5
* 1.5.2 - Correction little bug when the group is "Client"
* 1.5.3 - Add possibility to valid if VIES is enable, Add table with last customers in the back office home page
* 1.5.4 - Allow group pro only (not default)
* 1.5.4.1 - optimisation when VIES is "out"
* 1.5.5 - Add VAT number in the invoice and add Croatia in the list of country
* 1.5.6 - little debug (VAT number also included in the footer of PDF)
* 1.6 - update for v1.6, add hookdashboardZoneTwo 
* 1.7 - update for v1.7
*
*  @author    Vincent MASSON <contact@coeos.pro>
*  @copyright Vincent MASSON <www.coeos.pro>
*  @license   http://www.coeos.pro/boutique/fr/content/3-conditions-generales-de-ventes
*}

<input name="page" value="{$page|escape:'htmlall':'UTF-8'}" type="hidden"/>
{if $addresses_to_valid|count eq 0}
	<p>{l s='Not yet customer data to process' mod='checkvat'}</p>
{else}
<table id="table_customer">
<tr>
	<th>id_customer</th>
	<th>id_address</th>
	<th>{l s='shop' mod='checkvat'} (id_shop)</th>
	<th>{l s='customer' mod='checkvat'} ({l s='e-mail' mod='checkvat'})</th>
	<th>{l s='country' mod='checkvat'} ({l s='ISO Code' mod='checkvat'})</th>
	<th>{l s='VAT number' mod='checkvat'}</th>
	<th>{l s='Customer' mod='checkvat'}</th>
	<th>{l s='VIES' mod='checkvat'}</th>
	<th>{l s='Validated addresses' mod='checkvat'}</th>
	<th>{l s='Take off the list' mod='checkvat'}<br/>{l s='and delete VAT number' mod='checkvat'}</th>
</tr>
{foreach from=$addresses_to_valid item=address}
	<tr id="id_address_{$address.id_address|escape:'htmlall':'UTF-8'}">
		<td>{$address.id_customer|escape:'htmlall':'UTF-8'}</td>
		<td>{$address.id_address|escape:'htmlall':'UTF-8'}</td>
		<td>{$address.shop|escape:'htmlall':'UTF-8'} ({$address.id_shop|escape:'htmlall':'UTF-8'})</td>
		<td>{$address.firstname|escape:'htmlall':'UTF-8'} {$address.lastname|escape:'htmlall':'UTF-8'} ({$address.email|escape:'htmlall':'UTF-8'})</td>
		<td>{$address.country|escape:'htmlall':'UTF-8'} ({$address.iso_code|escape:'htmlall':'UTF-8'})</td>
		<td>
			<a target="_blank" href="index.php?tab=AdminAddresses&id_address={$address.id_address|escape:'htmlall':'UTF-8'}&updateaddress&token={$token_addresses|escape:'htmlall':'UTF-8'}">
				{$address.vat_number|escape:'htmlall':'UTF-8'}
			</a>
		</td>
		<td>
			<a target="_blank" href ="index.php?tab=AdminCustomers&id_customer={$address.id_customer|escape:'htmlall':'UTF-8'}&updatecustomer&token={$token_customer|escape:'htmlall':'UTF-8'}">
				<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/views/img/customer.gif" alt="{l s='Customer' mod='checkvat'}" title="{l s='Customer' mod='checkvat'}"/>
			</a>
		<td>
			<a target="_blank" style="text-decoration: none;" href="http://ec.europa.eu/taxation_customs/vies/vatResponse.html?locale=
			{$id_lang_locale|escape:'htmlall':'UTF-8'}&memberStateCode={if $address.iso_code == 'GR'}EL{else}{$address.iso_code|escape:'htmlall':'UTF-8'}{/if}&number=
			{$address.vat_number|substr:2|escape:'htmlall':'UTF-8'}{if $address.iso_code == 'ES' || $address.iso_code == 'GR'}&traderName={/if}">
				<img src="../modules/{$name|escape:'htmlall':'UTF-8'}/logo.gif" alt="{l s='Validation "VIES" of the VAT number' mod='checkvat'}" title="{l s='Validation "VIES" of the VAT number' mod='checkvat'}"/>
			</a>
		</td>
		<td>
			<ps-switch
			name="valid_address_{$address.id_address|escape:'htmlall':'UTF-8'}"
			yes="{l s='Yes' mod='checkvat'}"
			no="{l s='No' mod='checkvat'}"
			active="{if $address.address_valid == 1}true{else}false{/if}"></ps-switch>
		</td>
		<td>
			<input name="take_off_{$address.id_address|escape:'htmlall':'UTF-8'}" type="checkbox" value="1"/>
		</td>
	</tr>
{/foreach}
</table>
<br/>
<p>{l s='Page' mod='checkvat'} : 
{for $i = 1 to $nbre_page}
	<span class="pagination {if $i eq $page}current_page{/if}"><a href="index.php?tab=AdminModules&configure=checkvat&token={$smarty.get.token|escape:'htmlall':'UTF-8'}&page={$i|escape:'htmlall':'UTF-8'}">{$i|escape:'htmlall':'UTF-8'}</a></span> 
{/for}
</p>
{/if}