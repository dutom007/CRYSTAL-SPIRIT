<?php
/**
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
* 1.6.1 - verification VAT and counrty
* 1.6.2 - minor modifications
* 1.7.0 - update for prestashop 1.7.x
*
*  @author    Vincent MASSON <contact@coeos.pro>
*  @copyright Vincent MASSON <www.coeos.pro>
*  @license   http://www.coeos.pro/boutique/fr/content/3-conditions-generales-de-ventes
*/
class AddressFormat extends AddressFormatCore
{
    /*
    * module: checkvat
    * date: 2017-05-04 03:31:35
    * version: 1.7.0
    */
    public static function getFieldsRequired()
    {
        $parent = parent::getFieldsRequired();
        $config = Configuration::get('checkvat_config');
        $values = unserialize($config);
        if ((int)$values['vat_required'] == 1) {
            $parent = array_unique(array_merge($parent, array('vat_number')));
        }
        $context = Context::getContext();
        if (Tools::getValue('vat_invalid') == 1 && !isset($context->msg_vat_invalid)) {
            $context->msg_vat_invalid = 1;
            $context->controller->errors[] = Tools::displayError('Your VAT number is invalid');
        }
        return $parent;
    }
}
