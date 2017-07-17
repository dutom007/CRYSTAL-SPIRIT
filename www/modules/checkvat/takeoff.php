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

include(dirname(__FILE__).'../../../config/config.inc.php');
require_once(dirname(__FILE__).'../../../init.php');
require_once('checkvat.php');
$module = new CheckVat();
$get_token = $module->getToken();
$token = Tools::getValue('token');
if (!defined('_PS_VERSION_') || $get_token != $token) {
    exit;
}

if (Tools::getValue('id_address')
    && Db::getInstance()->update(
        'address',
        array('vat_number' => null),
        '`id_address` = '.(int)Tools::getValue('id_address'),
        1
    )
    ) {
    Tools::redirect('index.php');
} else {
    echo $module->l('An error occured during validation of the address');
}
exit();
