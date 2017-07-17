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



<ps-panel icon="icon-cogs" header="{l s='Configuration' mod='checkvat'}">

<fieldset>
<form method="post" action="{$url|escape:'htmlall':'UTF-8'}">
    <ps-tabs position="top" id="menu_module">
        <ps-tab title="{l s='Configuration' mod='checkvat'}" active="true" id="tab1" icon="icon-AdminParentModules">
            <ps-switch
            name="address_required"
            label="{l s='Address required after inscription' mod='checkvat'}"
            id="address_required"
            yes="{l s='Yes' mod='checkvat'}"
            no="{l s='No' mod='checkvat'}"
            active="{if $config.address_required eq 1}true{else}false{/if}"></ps-switch><br/><br/>
            
            <ps-switch
            name="vat_required"
            label="{l s='Customers registered must provide their VAT number' mod='checkvat'}"
            id="vat_required"
            yes="{l s='Yes' mod='checkvat'}"
            no="{l s='No' mod='checkvat'}"
            active="{if $config.vat_required eq 1}true{else}false{/if}"></ps-switch><br/><br/>
                        
            <ps-switch
            name="valid_auto_if_vies_enable"
            label="{l s='Automatic validation of the account if VIES is not accessible (only for validation automatic)' mod='checkvat'}"
            id="valid_auto_if_vies_enable"
            yes="{l s='Yes' mod='checkvat'}"
            no="{l s='No' mod='checkvat'}"
            active="{if $config.valid_auto_if_vies_enable eq 1}true{else}false{/if}"></ps-switch><br/><br/>
            
            <ps-switch
            name="customer_group_pro_only"
            label="{l s='Group "pro" only (not default)' mod='checkvat'}"
            id="customer_group_pro_only"
            yes="{l s='Yes' mod='checkvat'}"
            no="{l s='No' mod='checkvat'}"
            active="{if $config.customer_group_pro_only eq 1}true{else}false{/if}"></ps-switch><br/><br/>
            
            <ps-switch
            name="mail_customer"
            label="{l s='Send an email to the customer after validation of his address (only when you valid an address in the back office or by mail)' mod='checkvat'}"
            id="mail_customer"
            yes="{l s='Yes' mod='checkvat'}"
            no="{l s='No' mod='checkvat'}"
            active="{if $config.mail_customer eq 1}true{else}false{/if}"></ps-switch><br/><br/>
            
                        
            {foreach from=$employees item=employee}
                <ps-switch
                name="employee_{$employee.id_employee|escape:'htmlall':'UTF-8'}"
                label="{l s='Send an email to' mod='checkvat'} {$employee.firstname|escape:'htmlall':'UTF-8'} {$employee.lastname|escape:'htmlall':'UTF-8'} ({$employee.email|escape:'htmlall':'UTF-8'})"
                id="employee_{$employee.id_employee|escape:'htmlall':'UTF-8'}"
                yes="{l s='Yes' mod='checkvat'}"
                no="{l s='No' mod='checkvat'}"
                hint="{l s='Only for valid an address' mod='checkvat'}"
                active="{if $employee.id_employee|in_array:$config.mail_employees}true{else}false{/if}"></ps-switch><br/><br/>
            {/foreach}
            
            
            <table id="tableConfig">
            <tr style="text-align:center;font-weight:bold">
                <td>{l s='Country (ISO Code)' mod='checkvat'}</td>
                <td>{l s='ISO code' mod='checkvat'}</td>
                <td>{l s='Customer group' mod='checkvat'}</td>
                <td>{l s='Automatic validation' mod='checkvat'}</td>
            </tr>

            {foreach from=$list item=ligne}
            <tr>
                <td>{$ligne.country|escape:'htmlall':'UTF-8'}</td>
                <td>{$ligne.iso_code|escape:'htmlall':'UTF-8'}</td>
                <td>
                    <select name="groupe_{$ligne.iso_code|escape:'htmlall':'UTF-8'}">
                        {foreach from=$liste_groupes item=groupe}
                            <option value="{$groupe.id_group|escape:'htmlall':'UTF-8'}" {if $ligne.id_group eq $groupe.id_group} selected="selected"{/if}>{$groupe.name|escape:'htmlall':'UTF-8'}</option>
                        {/foreach}
                    </select>
                </td>
                <td>
                <ps-switch name="validation_auto_{$ligne.iso_code|escape:'htmlall':'UTF-8'}"
                    label="" 
                    id="validation_auto_{$ligne.iso_code|escape:'htmlall':'UTF-8'}" 
                    yes="{l s='Yes' mod='checkvat'}"
                    no="{l s='No' mod='checkvat'}"
                    active="{if $ligne.validation_auto eq 1}true{else}false{/if}"></ps-switch>    
                </td>
            </tr>
            {/foreach}
            </table>
        </ps-tab>
        
        
        
        
        
        
        
        <ps-tab title="{l s='Addresses customers' mod='checkvat'}" id="tab2" icon="icon-AdminParentModules">
            <div id="validation_list_customers">
                {include file="$tpl_dir./validation_list_customers.tpl"}
            </div>
        </ps-tab>    
        
        <ps-tab title="{l s='Help' mod='checkvat'}" id="tab3" icon="icon-AdminParentModules">
            <div id="help_checkvat">


                <p class="cv_help">{l s='Address required after inscription' mod='checkvat'}</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='customers will have to register an address to visit the shop,' mod='checkvat'}<br/>
                    <strong>{l s='No' mod='checkvat'}</strong>: {l s='customers can visit the shop without registering an address' mod='checkvat'}
                </p>
                
                
                <p class="cv_help">{l s='Customers registered must provide their VAT number' mod='checkvat'}</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='reserved for B2B, ie if and only if all your customers are professionals' mod='checkvat'}<br/>
                    <strong>{l s='No' mod='checkvat'}</strong>: {l s='If you have non-professional clients (individuals)' mod='checkvat'}
                </p>


                <p class="cv_help">{l s='Automatic validation of the account if VIES is not accessible (only for validation automatic)' mod='checkvat'}</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='advised, if the VIES system is inaccessible, it is very rare but it can happen, customers will not be blocked when registering the address' mod='checkvat'}<br/>
                    <strong>{l s='No' mod='checkvat'}</strong>: {l s='this blocks the clients on the address page they are resnseigner if VIES is at the same time inaccessible.' mod='checkvat'}
                </p>


                <p class="cv_help">{l s='Group "pro" only (not default)' mod='checkvat'}</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='allows to put the client in the professional client group you have chosen, it will not be in the client group "default",' mod='checkvat'}<br/>
                    {l s='This allows not to display a means of delivery which you reserve to the private (not professional) and which you do not want to propose to the professionals for example,' mod='checkvat'}
                </p>


                <p class="cv_help">{l s='Send an email to the customer after validation of his address (only when you valid an address in the back office or by mail)' mod='checkvat'}</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='this will notify your customer that his address has been validated and that he has changed client group' mod='checkvat'}
                </p>


                <p class="cv_help">{l s='Send an email to' mod='checkvat'}... ({l s='admin' mod='checkvat'})</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='if you want to be notified by email that a customer has just registered and validate his address. If the validation of its address is automatic, you do not receive an email.' mod='checkvat'}
                </p>


                <p class="cv_help">{l s='Automatic validation' mod='checkvat'}</p>
                <p class="cv_answer">
                    <strong>{l s='Yes' mod='checkvat'}</strong>: {l s='Automatically validate an address, this prevents you from having to validate each client address, if you have many clients, it is advisable' mod='checkvat'}
                </p>
            </div>
        </ps-tab>
        
        
        
        
        
        
    </ps-tabs>
<ps-panel-footer>
    <ps-panel-footer-submit title="{l s='Save' mod='checkvat'}" icon="process-icon-save" direction="right" name="submitConfigAdd" value="save"></ps-panel-footer-submit>
</ps-panel-footer>
</form></fieldset>
</ps-panel>