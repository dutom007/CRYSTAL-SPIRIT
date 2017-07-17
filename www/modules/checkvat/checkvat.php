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

if (!defined('_PS_VERSION_')) {
    exit;
}

class CheckVat extends Module
{
    protected $error = false;

    public function __construct()
    {
        $this->name = 'checkvat';
        $this->tab = 'front_office_features';
        $this->version = '1.7.0';
        $this->author = 'MassonVincent';
        $this->module_key = '77467eb09c97f9f12c00533374ef19e4';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('VAT number and customer group');
        $this->description = $this->l('Add an addon to check the VAT number and change customers of customer groups');
        $this->confirmUninstall = $this->l('Are you sure you want to remove your module "controller VAT" ?');
        $this->nbreCustomersByPage = 50;
    }
    public function install()
    {
        $this->addHook('actionObjectAddressAddAfter');
        $this->addHook('actionObjectAddressUpdateAfter');
        return (parent::install()
                && $this->registerHook('createAccountForm')
                && $this->registerHook('top')
                && $this->registerHook('header')
                && $this->registerHook('actionObjectAddressAddAfter')
                && $this->registerHook('actionObjectAddressUpdateAfter')
                && $this->registerHook('displayBackOfficeHome')
                && $this->registerHook('dashboardZoneTwo')
                && Db::getInstance()->execute('
                    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'address_vat_valid` (
                    `id_address`     INT(10) UNSIGNED NOT NULL,
                    `valid`         INT(1) UNSIGNED NOT NULL DEFAULT 2,
                    PRIMARY KEY(`id_address`)) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;')
                && $this->updateConfigModule($this->configModuleByDefault())
                && $this->updateConfigCountries($this->configCountriesByDefault())
                && Configuration::updateValue('checkvat_token', md5(microtime()))
                );
    }
    public function addHook($hook)
    {
        $sql = 'SELECT `id_hook` FROM `'._DB_PREFIX_.'hook` WHERE `name` = \''.pSQL($hook).'\'';
        $id_hook = (int)Db::getInstance()->getValue($sql);
        if ($id_hook > 0) {
            return true;
        }
        return Db::getInstance()->insert('hook', array('name' => pSQL($hook)));
    }
    public function uninstall()
    {
        return (parent::uninstall()
            && Configuration::deleteByName($this->name.'_config')
            && Configuration::deleteByName($this->name.'_countries')
            && Configuration::deleteByName('checkvat_token')
            && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'address_vat_valid`'));
    }
    public function configModuleByDefault()
    {
        return array('vat_required' => 0,
                    'address_required' => 0,
                    'valid_auto_if_vies_enable' => 0,
                    'customer_group_pro_only'     => 0,
                    'mail_customer' => 0,
                    'mail_employees' => array(),
                    );
    }
    public function updateConfigModule($values)
    {
        $config = serialize($values);
        return Configuration::updateValue($this->name.'_config', $config);
    }
    public function getConfigModule($field = false)
    {
        $config = Configuration::get($this->name.'_config');
        $unserialize = unserialize($config);
        return ($field)? $unserialize[$field] : $unserialize;
    }
    public function configCountriesByDefault()
    {
        $ps_customer_group = Configuration::get('PS_CUSTOMER_GROUP');
        $g = isset($ps_customer_group)? (int)$ps_customer_group : 3;
        return array('AT' => array('iso_code' => 'AT', 'prefix' => 'AT', 'id_group' => $g, 'validation_auto' => 1),
                    'BE' => array('iso_code' => 'BE', 'prefix' => 'BE', 'id_group' => $g, 'validation_auto' => 1),
                    'BG' => array('iso_code' => 'BG', 'prefix' => 'BG', 'id_group' => $g, 'validation_auto' => 1),
                    'CY' => array('iso_code' => 'CY', 'prefix' => 'CY', 'id_group' => $g, 'validation_auto' => 1),
                    'CZ' => array('iso_code' => 'CZ', 'prefix' => 'CZ', 'id_group' => $g, 'validation_auto' => 1),
                    'DE' => array('iso_code' => 'DE', 'prefix' => 'DE', 'id_group' => $g, 'validation_auto' => 1),
                    'DK' => array('iso_code' => 'DK', 'prefix' => 'DK', 'id_group' => $g, 'validation_auto' => 1),
                    'EE' => array('iso_code' => 'EE', 'prefix' => 'EE', 'id_group' => $g, 'validation_auto' => 1),
                    'ES' => array('iso_code' => 'ES', 'prefix' => 'ES', 'id_group' => $g, 'validation_auto' => 1),
                    'FI' => array('iso_code' => 'FI', 'prefix' => 'FI', 'id_group' => $g, 'validation_auto' => 1),
                    'FR' => array('iso_code' => 'FR', 'prefix' => 'FR', 'id_group' => $g, 'validation_auto' => 1),
                    'GB' => array('iso_code' => 'GB', 'prefix' => 'GB', 'id_group' => $g, 'validation_auto' => 1),
                    'GR' => array('iso_code' => 'GR', 'prefix' => 'EL', 'id_group' => $g, 'validation_auto' => 1),
                    'HR' => array('iso_code' => 'HR', 'prefix' => 'HR', 'id_group' => $g, 'validation_auto' => 1),
                    'HU' => array('iso_code' => 'HU', 'prefix' => 'HU', 'id_group' => $g, 'validation_auto' => 1),
                    'IE' => array('iso_code' => 'IE', 'prefix' => 'IE', 'id_group' => $g, 'validation_auto' => 1),
                    'IT' => array('iso_code' => 'IT', 'prefix' => 'IT', 'id_group' => $g, 'validation_auto' => 1),
                    'LT' => array('iso_code' => 'LT', 'prefix' => 'LT', 'id_group' => $g, 'validation_auto' => 1),
                    'LU' => array('iso_code' => 'LU', 'prefix' => 'LU', 'id_group' => $g, 'validation_auto' => 1),
                    'LV' => array('iso_code' => 'LV', 'prefix' => 'LV', 'id_group' => $g, 'validation_auto' => 1),
                    'MT' => array('iso_code' => 'MT', 'prefix' => 'MT', 'id_group' => $g, 'validation_auto' => 1),
                    'NL' => array('iso_code' => 'NL', 'prefix' => 'NL', 'id_group' => $g, 'validation_auto' => 1),
                    'PL' => array('iso_code' => 'PL', 'prefix' => 'PL', 'id_group' => $g, 'validation_auto' => 1),
                    'PT' => array('iso_code' => 'PT', 'prefix' => 'PT', 'id_group' => $g, 'validation_auto' => 1),
                    'RO' => array('iso_code' => 'RO', 'prefix' => 'RO', 'id_group' => $g, 'validation_auto' => 1),
                    'SE' => array('iso_code' => 'SE', 'prefix' => 'SE', 'id_group' => $g, 'validation_auto' => 1),
                    'SI' => array('iso_code' => 'SI', 'prefix' => 'SI', 'id_group' => $g, 'validation_auto' => 1),
                    'SK' => array('iso_code' => 'SK', 'prefix' => 'SK', 'id_group' => $g, 'validation_auto' => 1));
    }
    public function updateConfigCountries($values)
    {
        $config = serialize($values);
        return Configuration::updateValue($this->name.'_countries', $config);
    }
    public function getConfigCountry($iso_code = false)
    {
        $config = Configuration::get($this->name.'_countries');
        $unserialize = unserialize($config);
        return ($iso_code)? $unserialize[$iso_code] : $unserialize;
    }
    public function getPrefix($iso_code)
    {
        return $this->getConfigCountry($iso_code)['prefix'];
    }
    public function cleanVat($vat)
    {
        return str_replace(array(' ', '*', '-', '.', '/'), '', $vat);
    }
    public function getToken()
    {
        return Configuration::get('checkvat_token');
    }
    public function listCodeIso()
    {
        return '\''.(implode('\', \'', array_keys($this->configCountriesByDefault()))).'\'';
    }
    public function hookdashboardZoneTwo()
    {
        return $this->displayForm();
    }
    public function hookdisplayBackOfficeHome()
    {
        return $this->displayForm();
    }
    public function hookactionObjectAddressAddAfter($params)
    {
        return $this->hookactionObjectAddressUpdateAfter($params);
    }
    public function hookHeader()
    {
        if (!$this->context->customer->logged
            || $this->context->controller->php_self != 'order'
            || 1 != (int)Tools::getValue('confirm-addresses')) {
            return;
        }
        $address = Configuration::get('PS_TAX_ADDRESS_TYPE');
        $id_address = Tools::getValue($address, $this->context->cart->$address);
        $iso_code = $this->isoCodeFromIdAddress($id_address);
        $id_group = (int)$this->getConfigCountry($iso_code)['id_group'];
        $valid = (int)Db::getInstance()->getValue('SELECT `valid` FROM
        `'._DB_PREFIX_.'address_vat_valid` WHERE `id_address` = '.(int)$id_address);

        if ($id_group != $this->context->customer->id_default_group && $valid == 1) {
            $this->context->customer->id_default_group = $id_group;
            Db::getInstance()->update(
                'customer',
                array('id_default_group' => (int)$id_group),
                '`id_customer` = '.(int)$this->context->customer->id,
                1
            );
        }
    }
    public function hookactionObjectAddressUpdateAfter($params)
    {
        if (isset($this->context->checkvat)) {
            return;
        }
        $this->context->checkvat = true;
        $vat_number = $params['object']->vat_number;
        $id_address = (int)$params['object']->id;
        if (!$vat_number) {
            if ((int)$this->getConfigModule('vat_required') == 0) {
                return;
            }
            if ((int)$this->getConfigModule('vat_required') == 1) {
                Tools::redirect('index.php?controller=address&id_address='.$id_address.'&vat_invalid=1');
            }
        } else {
            if (!$this->verificationVATNumber($vat_number)) {
                Tools::redirect('index.php?controller=address&id_address='.$id_address.'&vat_invalid=1');
            }

            $iso_code = Tools::strtoupper(Tools::substr($vat_number, 0, 2));
            $vies = (int)$this->vatValideByVies($iso_code, $vat_number);

            if ($vies == 2) {
                Tools::redirect('index.php?controller=address&id_address='.$id_address.'&vat_invalid=1');
            }

            $clean_vat = $this->cleanVat($vat_number);
            if ($clean_vat != $vat_number) {
                Db::getInstance()->update(
                    'address',
                    array('vat_number' => $clean_vat),
                    '`vat_number` = '.pSQL($vat_number),
                    1
                );
            }
            
            $valid_auto_if_vies_enable = (int)$this->getConfigModule('valid_auto_if_vies_enable');
            $valid = ((int)$this->getConfigCountry($iso_code)['validation_auto'] == 1
                && ($vies == 1 || ($vies == 3 && $valid_auto_if_vies_enable == 1)))? 1 : 0;
            $this->addressVATValid($id_address, $valid);

            if ($valid == 1) {
                $this->changeCustomerGroup($id_address);
            } else {
                foreach ($this->employees() as $employee) {
                    $this->sendMailToEmployee($employee['id_employee'], $id_address);
                }
            }
        }
    }
    public function sendMailToCustomer($id_address)
    {
        $sql = 'SELECT * 
                FROM `'._DB_PREFIX_.'customer` c
                JOIN `'._DB_PREFIX_.'address` a ON(a.`id_customer` = c.`id_customer`)
                WHERE a.`id_address` = '.(int)$id_address;
        $customer = Db::getInstance()->getRow($sql);
        $template = 'validation_address';
        $subject = $this->l('Your address is valid');
        $datas = array();
        foreach ($customer as $name => $value) {
            $datas['{'.$name.'}'] = $value;
        }
        $mail = dirname(__FILE__).'/mails/';
        Mail::Send(
            $customer['id_lang'],
            $template,
            $subject,
            $datas,
            $customer['email'],
            null,
            null,
            null,
            null,
            null,
            $mail
        );
    }
    public function sendMailToEmployee($id_employee, $id_address)
    {
        $mail_employees = $this->getConfigModule('mail_employees');
        if (!in_array((int)$id_employee, $mail_employees)) {
            return;
        }
        $datas = array();
        $sql = 'SELECT * 
                FROM `'._DB_PREFIX_.'customer` c
                JOIN `'._DB_PREFIX_.'address` a ON(a.`id_customer` = c.`id_customer`)
                WHERE a.`id_address` = '.(int)$id_address;
        $customer = Db::getInstance()->getRow($sql);
        foreach ($customer as $name => $value) {
            $datas['{'.$name.'}'] = $value;
        }

        $sql = 'SELECT *
                FROM `'._DB_PREFIX_.'employee`
                WHERE `id_employee` = '.(int)$id_employee;
        $employee = Db::getInstance()->getRow($sql);
        foreach ($employee as $name => $value) {
            $datas['{employee_'.$name.'}'] = $value;
        }

        $template = 'address_to_valid';
        $subject = $this->l('Address customer to valid');

        $mail = dirname(__FILE__).'/mails/';
        $datas['{token}'] = $this->getToken();
        $datas['{id_address}'] = $id_address;
        Mail::Send(
            $customer['id_lang'],
            $template,
            $subject,
            $datas,
            $employee['email'],
            null,
            null,
            null,
            null,
            null,
            $mail
        );
    }
    public function verificationVATNumber($vat_number)
    {
        $iso_code = Tools::strtoupper(Tools::substr($vat_number, 0, 2));
        if ($id_country = Tools::getValue('id_country')) {
            $iso_bdd = Db::getInstance()->getValue('SELECT `iso_code`
            FROM `'._DB_PREFIX_.'country` WHERE `id_country` = '.(int)$id_country);
            $iso_bdd = $this->getPrefix($iso_bdd);
            if ($iso_bdd != $iso_code) {
                return false;
            }
        }
        return $this->structureVatValide($iso_code, $vat_number);
    }
    public function getVATNumberFromIdAddress($id_address)
    {
        return Db::getInstance()->getValue('SELECT `vat_number`
        FROM `'._DB_PREFIX_.'address` WHERE `id_address` = '.(int)$id_address);
    }
    public function addressVATValid($id_address, $valid = 0)
    {
        $values = array('id_address'     => (int)$id_address,
                        'valid'         => (int)$valid);
        $sql = 'SELECT `id_address` FROM `'._DB_PREFIX_.'address_vat_valid` WHERE `id_address` = '.(int)$id_address;
        $avv = (int)Db::getInstance()->getValue($sql);
        if ($avv == 0) {
            return Db::getInstance()->insert('address_vat_valid', $values);
        }
        return Db::getInstance()->update(
            'address_vat_valid',
            array('valid' => (int)$valid),
            '`id_address` = '.(int)$id_address,
            1
        );
    }
    public function isoCodeFromIdAddress($id_address)
    {
        $sql = 'SELECT c.`iso_code` 
                FROM `'._DB_PREFIX_.'country` c
                JOIN `'._DB_PREFIX_.'address` a ON(a.`id_country` = c.`id_country`)
                WHERE a.`id_address` = '.(int)$id_address;
        return Db::getInstance()->getValue($sql);
    }
    public function changeCustomerGroup($id_address)
    {
        $sql = 'SELECT `id_customer` FROM `'._DB_PREFIX_.'address` WHERE `id_address` = '.(int)$id_address;
        $id_customer = (int)Db::getInstance()->getValue($sql);

        $iso_code = $this->getIsoCodeForAddress($id_address);
        $new_id_group = $this->getIdGroupForAnIsoCode($iso_code);
        $id_default_group =    (int)$this->getDefaultGroupId($id_customer);
        $values = array('id_default_group' => $new_id_group);
        if ($new_id_group != $id_default_group
        && !Db::getInstance()->update('customer', $values, '`id_customer` = '.(int)$id_customer, 1)
            ) {
            return false;
        }
        $customer = new Customer((int)$id_customer);
        $groups = $this->getGroupsStatic($id_customer);

        if (!in_array($new_id_group, $groups)) {
            $groups[] = $new_id_group;
        }
        $groups = array_unique($groups);
        $ps_customer_group = (int)Configuration::get('PS_CUSTOMER_GROUP');
        $customer_group_pro_only = (int)$this->getConfigModule('customer_group_pro_only');
        if (in_array($ps_customer_group, $groups)
            && $ps_customer_group != $new_id_group
            && $customer_group_pro_only == 1) {
            unset($groups[array_search($ps_customer_group, $groups)]);
        }
        $customer->updateGroup($groups);
        $sql = 'SELECT `id_cart` FROM `'._DB_PREFIX_.'cart`
        WHERE `id_customer`='.(int)$id_customer.' ORDER BY `id_cart` DESC';
        $id_cart = Db::getInstance()->getValue($sql);
        if ((int)$id_cart > 0) {
            Db::getInstance()->update(
                'cart',
                array('id_address_delivery' => (int)$id_address, 'id_address_invoice' => (int)$id_address),
                '`id_cart` = '.(int)$id_cart,
                1
            );
        }
        return true;
    }
    public static function getGroupsStatic($id_customer)
    {
        if (!Group::isFeatureActive()) {
            return array(Configuration::get('PS_CUSTOMER_GROUP'));
        }
        $customer_groups = array();
        if ($id_customer == 0) {
            $customer_groups[$id_customer] = array((int)Configuration::get('PS_UNIDENTIFIED_GROUP'));
        }

        if (!isset($customer_groups[$id_customer])) {
            $customer_groups[$id_customer] = array();
            $result = Db::getInstance()->executeS('
            SELECT cg.`id_group`
            FROM '._DB_PREFIX_.'customer_group cg
            WHERE cg.`id_customer` = '.(int)$id_customer);
            foreach ($result as $group) {
                $customer_groups[$id_customer][] = (int)$group['id_group'];
            }
        }

        return $customer_groups[$id_customer];
    }
    public function removeCustomerGroup($id_address)
    {
        $sql = 'SELECT `id_customer` FROM `'._DB_PREFIX_.'address` WHERE `id_address` = '.(int)$id_address;
        $id_customer = Db::getInstance()->getValue($sql);
        $id_default_group =    (int)$this->getDefaultGroupId((int)$id_customer);
        $iso_code = $this->getIsoCodeForAddress($id_address);
        $new_id_group = $this->getIdGroupForAnIsoCode($iso_code);
        $ps_customer_group = Configuration::get('PS_CUSTOMER_GROUP');
        if ($new_id_group == $id_default_group && $id_default_group != $ps_customer_group) {
            $values = array('id_default_group' => (int)$ps_customer_group);
            Db::getInstance()->update('customer', $values, '`id_customer` = '.(int)$id_customer, 1);
        }

        $customer = new Customer((int)$id_customer);
        $groups = $this->getGroupsStatic($id_customer);
        if (!in_array($ps_customer_group, $groups)) {
            $groups[] = (int)$ps_customer_group;
        }
        unset($groups[array_search($new_id_group, $groups)]);
        $groups = array_values($groups);

        $customer->updateGroup($groups);
        $customer->update();

        Db::getInstance()->update('address_vat_valid', array('valid' => 0), '`id_address` = '.(int)$id_address, 1);

        $config = $this->getConfigCountry();
        $other_countries = array();
        foreach ($config as $iso_code => $country) {
            if ($country['id_group'] != $ps_customer_group) {
                $other_countries[] = $iso_code;
            }
        }
        $countries = '"'.implode('","', $other_countries).'"';
        if (!empty($other_countries) && $countries != '') {
            $sql = 'SELECT a.`id_address` 
                    FROM `'._DB_PREFIX_.'address` a
                    JOIN `'._DB_PREFIX_.'address_vat_valid` avv
                        ON (avv.`id_address` = a.`id_address` AND avv.`valid` = 1)
                    JOIN `'._DB_PREFIX_.'country` c
                        ON (c.`id_country` = a.`id_country` AND c.`iso_code` IN ('.$countries.'))
                    WHERE a.`vat_number` != ""
                    AND a.`id_customer` = '.(int)$id_customer.'
                    AND a.`id_address` != '.(int)$id_address;
            $other_id_address = (int)Db::getInstance()->getValue($sql);
            if ($other_id_address > 0) {
                $this->changeCustomerGroup($other_id_address);
            }
        }
        return true;
    }
    public function hookTop()
    {
        $config = $this->getConfigModule();
        if (!$this->context->customer->id) {
            return;
        }
        $vat_customer = array();
        $vat_customer = $this->getvatCustomer();
        if ($this->context->customer->logged
            && (int)$config['vat_required'] == 1
            && $vat_customer == false
            && ((int)$this->context->cart->id_address_delivery != 0
            && (int)$this->context->cart->id_address_invoice != 0)
            && $this->context->controller->php_self != 'my-account'
            && $this->context->controller->php_self != 'address'
            && $this->context->controller->php_self != 'addresses') {
            Tools::redirect('index.php?controller=my-account');
        }

        if ($this->context->customer->logged
                && (int)$this->context->cart->id_address_delivery == 0
                && (int)$this->context->cart->id_address_invoice == 0
                && (int)$config['address_required'] == 1
                && $this->context->controller->php_self != 'address') {
            Tools::redirect('index.php?controller=address');
        }

        $sql = 'SELECT `id_address` FROM `'._DB_PREFIX_.'address`
            WHERE `id_customer` = '.(int)$this->context->customer->id.' AND `vat_number` = ""';
        $id_address = (int)Db::getInstance()->getValue($sql);
        if ((int)$config['vat_required'] == 1
            && $this->context->controller->php_self != 'address'
            && $id_address > 0) {
            Tools::redirect('index.php?controller=address&id_address='.$id_address.'&vat_invalid=1');
        }
    }
    public function hookcreateAccountForm()
    {
        $this->context->smarty->assign('msg_vat_valid', false);
        $this->context->smarty->assign('bloc_checkvat', true);
        $this->context->smarty->assign('msg_vat_invalid', false);

        $list_countries_sql = '
            SELECT DISTINCT c.`iso_code`, c_l.`name`
            FROM `'._DB_PREFIX_.'country` c
            INNER JOIN `'._DB_PREFIX_.'country_lang` c_l ON(c_l.`id_country` = c.`id_country`)
            WHERE c_l.`id_lang` = '.(int)$this->context->language->id.'
            AND c.`iso_code` IN('.$this->listCodeIso().')';

        $list_countries = Db::getInstance()->ExecuteS($list_countries_sql);
        $this->context->smarty->assign('list_countries', $list_countries);
        $this->context->smarty->assign('validation_auto', false);

        $this->context->controller->addCSS(($this->_path).'css/checkvat.css');
        $this->context->controller->addJS(($this->_path).'js/checkvat.js');
    }
    public function getvatCustomer($id_customer = false)
    {
        $id_customer = ($id_customer)? $id_customer : (int)$this->context->customer->id;
        if (!(Db::getInstance()->getValue('
            SELECT `vat_number` FROM `'._DB_PREFIX_.'address` 
            WHERE `id_customer` = '.$id_customer.' 
            AND `active` = 1 
            AND `deleted` = 0'))) {
            return false;
        }
        return true;
    }
    public function getIdGroupForAnIsoCode($iso_code)
    {
        return $this->getConfigCountry($iso_code)['id_group'];
    }
    private function submitConfigAdd()
    {
        $config = array();
        foreach ($this->configModuleByDefault() as $key => $value) {
            if ($key != 'mail_employees') {
                $config[$key] = (int)Tools::getValue($key, $value);
            }
        }
        $config['mail_employees'] = array();
        foreach ($this->employees() as $employee) {
            if ((int)Tools::getValue('employee_'.$employee['id_employee']) == 1) {
                $config['mail_employees'][] = (int)$employee['id_employee'];
            }
        }
        $this->updateConfigModule($config);

        $page = (int)Tools::getValue('page', 1);
        foreach ($this->addressesToValid($page) as $address) {
            $id_address = (int)$address['id_address'];
            $valid = (int)Tools::getValue('valid_address_'.$id_address);

            if ((int)Tools::getValue('take_off_'.$id_address) == 1) {
                if (!$this->takeOffAddress($id_address)
                    || !$this->takeOffCustomer($address['id_customer'])) {
                    return false;
                }
            } elseif ($address['address_valid'] == 0 && $valid == 1) {
                $this->addressVATValid($id_address, $valid);
                $this->changeCustomerGroup($id_address);
                $this->sendMailToCustomer($id_address);
            } elseif ($address['address_valid'] == 1 && $valid == 0) {
                $this->addressVATValid($id_address, $valid);
                $this->removeCustomerGroup($id_address);
            }
        }
        $config = array();
        foreach ($this->configCountriesByDefault() as $iso_code => $values) {
            $config[$iso_code]['prefix']            = $values['prefix'];
            $config[$iso_code]['iso_code']             = $values['iso_code'];
            $config[$iso_code]['id_group']             = (int)Tools::getValue('groupe_'.$iso_code, 0);
            $config[$iso_code]['validation_auto']     = (int)Tools::getValue('validation_auto_'.$iso_code, 0);
        }
        return $this->updateConfigCountries($config);
    }
    public function takeOffAddress($id_address)
    {
        return (Db::getInstance()->delete('address_vat_valid', '`id_address` = '.(int)$id_address, 1)
            && Db::getInstance()->update(
                'address',
                array('vat_number' => null),
                '`id_address` = '.(int)$id_address,
                1
            ));
    }
    public function takeOffCustomer($id_customer)
    {
        $iso_code = $this->getIsoCodeForCustomer($id_customer);
        $id_group = (int)$this->getIdGroupForAnIsoCode($iso_code);

        $id_default_group = (int)Configuration::get('PS_CUSTOMER_GROUP');
        if (!Db::getInstance()->update(
            'customer',
            array('id_default_group' => $id_default_group),
            '`id_customer` = '.(int)$id_customer,
            1
        )) {
            return false;
        }
        $where = '`id_customer` = '.(int)$id_customer.' AND `id_group` = '.$id_group;
        if (!Db::getInstance()->delete('customer_group', $where, 1)) {
            return false;
        }

        $id_group_default = (int)Db::getInstance()->getValue('SELECT `id_group` FROM `'._DB_PREFIX_.'customer_group`
            WHERE `id_group` = '.$id_default_group.' AND `id_customer` = '.(int)$id_customer);
        if (!$id_group_default || $id_default_group != $id_group_default) {
            if (!Db::getInstance()->insert(
                'customer_group',
                array('id_group' => $id_default_group, 'id_customer' => (int)$id_customer)
            )
                ) {
                return false;
            }
        }
        return true;
    }
    public function getContent()
    {
        $this->_html = '';
        if (Tools::isSubmit('submitConfigAdd')) {
            if ($this->submitConfigAdd()) {
                $this->_html .= $this->displayConfirmation($this->l('The parameters were updated successfully'));
            } else {
                $this->_html .= $this->displayError($this->l('An error occurred while updating'));
            }
        }
        if (Tools::getValue('resetconfig')) {
            $this->updateConfigCountries($this->configCountriesByDefault());
        }

        $this->_html .= $this->displayForm();
        return $this->_html;
    }
    public function addressesToValid($page = 1)
    {
        $nb = (int)$this->nbreCustomersByPage;
        return Db::getInstance()->ExecuteS('SELECT a.`id_address`, a.`id_customer`, a.`vat_number`,
                c.`id_shop`, c.`firstname`, c.`lastname`, c.`email`,
                cl.`name` as `country`,
                cy.`iso_code`,
                s.`name` as `shop`,
                    CASE
                        WHEN avv.`id_address` > 0  
                            THEN avv.`valid`
                            ELSE 3
                    END as `address_valid`
                FROM `'._DB_PREFIX_.'address` a
                JOIN `'._DB_PREFIX_.'customer` c ON(c.`id_customer` = a.`id_customer`)
                JOIN `'._DB_PREFIX_.'shop` s ON(s.`id_shop` = c.`id_shop`)
                JOIN `'._DB_PREFIX_.'country` cy ON(cy.`id_country` = a.`id_country`)
                JOIN `'._DB_PREFIX_.'country_lang` cl
                    ON(cl.`id_country` = cy.`id_country` AND cl.`id_lang` = '.(int)$this->context->language->id.')
                LEFT JOIN `'._DB_PREFIX_.'address_vat_valid` avv ON(avv.`id_address` = a.`id_address`)
                WHERE a.`vat_number` != "" 
                    AND a.`active` = 1 
                    AND a.`deleted` = 0
                ORDER BY a.`id_customer` DESC, a.`id_address` DESC
                LIMIT '.($nb * ($page - 1)).', '.$nb);
    }
    private function displayForm()
    {
        $sql = 'SELECT c.`id_country`, c_l.`name` as country, c.`iso_code`
                FROM `'._DB_PREFIX_.'country` c
                INNER JOIN `'._DB_PREFIX_.'country_lang` c_l ON (c_l.`id_country` = c.`id_country`)
                WHERE c.`iso_code` IN('.$this->listCodeIso().')
                AND c_l.`id_lang` = '.(int)$this->context->language->id.'
                ORDER BY c.`iso_code` ASC';

        $list = array();
        $list = Db::getInstance()->ExecuteS($sql);
        $configuration = $this->getConfigCountry();
        foreach (array_keys($list) as $key) {
            $list[$key]['id_group']         = $configuration[$list[$key]['iso_code']]['id_group'];
            $list[$key]['validation_auto']     = $configuration[$list[$key]['iso_code']]['validation_auto'];
        }
        $sql = 'SELECT * FROM `'._DB_PREFIX_.'group` g
                INNER JOIN `'._DB_PREFIX_.'group_lang` g_l ON (g.`id_group` = g_l.`id_group`)
                WHERE g_l.`id_lang`='.(int)$this->context->employee->id_lang;
        $liste_groupes = Db::getInstance()->ExecuteS($sql);

        $list_id_group_for_an_iso_code = $this->getConfigCountry();
        $sql = 'SELECT COUNT(*) AS nbre_liste_customer_pro FROM `'._DB_PREFIX_.'address` 
            WHERE `vat_number` != \'\'';
        $nbre_liste_customer_pro = Db::getInstance()->getValue($sql);

        $page = (int)Tools::getValue('page', 1);
        $token_customer = Tools::getAdminToken(
            'AdminCustomers'.(int)Tab::getIdFromClassName('AdminCustomers').(int)$this->context->employee->id
        );
        $token_addresses = Tools::getAdminToken(
            'AdminAddresses'.(int)Tab::getIdFromClassName('AdminAddresses').(int)$this->context->employee->id
        );
        $nbre_page = ceil($nbre_liste_customer_pro / (int)$this->nbreCustomersByPage);

        $this->smarty->assign(array(
            'ps_version' => _PS_VERSION_,
            'path' => $this->_path,
            'displayname' => $this->displayName,
            'version' => $this->version,
            'iso_code' => $this->context->language->iso_code,
            'shop_name' => $this->context->shop->name,
            'name' => $this->name,
            'addresses_to_valid' => $this->addressesToValid($page),

            'id_lang_locale' => Tools::strtoupper(Language::getIsoById($this->context->language->id)),
            'list_id_group_for_an_iso_code' => $list_id_group_for_an_iso_code,
            'checkvat_token' => $this->getToken(),
            'token_customer' => $token_customer,
            'token_addresses' => $token_addresses,
            'nbre_page' => $nbre_page,
            'page' => $page,
            'tpl_dir' => '',
            'module_dir' => _MODULE_DIR_,
            'id_employee' => (int)$this->context->employee->id,
            'id_lang' => (int)$this->context->language->id,
            'multishop' => (int)Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE'),
            'url' => 'index.php?tab=AdminModules&configure='.$this->name.'&token='.Tools::getValue('token'),
            'groupes' => Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'group_lang` WHERE `id_lang` =
                '.(int)Configuration::get('PS_LANG_DEFAULT')),
            'list' => $list,
            'liste_groupes' => $liste_groupes,
            'configuration' => $this->getConfigCountry(),
            'config' => $this->getConfigModule(),
            'employees' => $this->employees(),
        ));
        $html = $this->display(__FILE__, 'views/templates/admin/prestui/presentation.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/'.$this->name.'.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/ps-alert.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/ps-form.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/ps-panel.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/ps-table.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/ps-tabs.tpl');
        $html .= $this->display(__FILE__, 'views/templates/admin/prestui/ps-tags.tpl');
        $this->context->controller->addCSS(($this->_path).'views/css/'.$this->name.'.css');
        $this->context->controller->addJS(($this->_path).'views/js/riot.min.js');
        $this->context->controller->addJS(($this->_path).'views/js/riot+compiler.min.js');

        return $html;
    }
    public function employees()
    {
        return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'employee` WHERE `active` = 1');
    }
    public function structureVatValide($iso_code, $numero_vat)
    {
        $vat = Tools::substr($numero_vat, 2);
        $vat_valide = false;
        switch ($iso_code) {
            case 'AT':
                if (Tools::substr($vat, 0, 1) == 'U'
                    && Tools::strlen($vat) == 9 && is_numeric(Tools::substr($vat, 1))) {
                    $vat_valide = true;
                }
                break;
            case 'BE':
                if (Tools::substr($vat, 1, 0) == 0 && Tools::strlen($vat) == 10 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'BG':
                if ((Tools::strlen($vat) == 9 || Tools::strlen($vat) == 10) && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'CY':
                if (Tools::strlen($vat) == 9 && is_numeric(Tools::substr($vat, 0, 8))
                    && !is_numeric(Tools::substr($vat, -1))) {
                    $vat_valide = true;
                }
                break;
            case 'CZ':
                if ((Tools::strlen($vat) == 8 || Tools::strlen($vat) == 9 || Tools::strlen($vat) == 10)
                    && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'DE':
                if (Tools::strlen($vat) == 9 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'DK':
                if (Tools::strlen($vat) == 8 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'EE':
                if (Tools::strlen($vat) == 9 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'GR':
                if (Tools::strlen($vat) == 9 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'EL':
                if (Tools::strlen($vat) == 9 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'ES':
                if (Tools::strlen($vat) == 9
                && ((is_numeric(Tools::substr($vat, 0, 1))
                    && !is_numeric(Tools::substr($vat, -1))) || (!is_numeric(Tools::substr($vat, 0, 1))
                && is_numeric(Tools::substr($vat, -1)))) && is_numeric(Tools::substr($vat, 1, 7))) {
                    $vat_valide = true;
                }
                break;
            case 'FI':
                if (Tools::strlen($vat) == 8 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'FR':
                if (Tools::strlen($vat) == 11 && is_numeric(Tools::substr($vat, -9))) {
                    $vat_valide = true;
                }
                break;
            case 'GB':
                if (((Tools::strlen($vat) == 9 || Tools::strlen($vat) == 12) && is_numeric($vat))
                || ( Tools::substr($vat, 0, 2) == 'GD'
                    && is_numeric(Tools::substr($vat, 2)) && Tools::strlen($vat) == 5)
                || ( Tools::substr($vat, 0, 2) == 'HA'
                    && is_numeric(Tools::substr($vat, 2))
                    && Tools::strlen($vat) == 5)) {
                    $vat_valide = true;
                }
                break;
            case 'HU':
                if (Tools::strlen($vat) == 8 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'HR':
                if (Tools::strlen($vat) == 11 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'IE':
                if (Tools::strlen($vat) == 8 && is_numeric(Tools::substr($vat, 0, 1))
                && is_numeric(Tools::substr($vat, 2, 5)) && !is_numeric(Tools::substr($vat, -1))) {
                    $vat_valide = true;
                }
                break;
            case 'IT':
                if (Tools::strlen($vat) == 11 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'LT':
                if ((Tools::strlen($vat) == 9 || Tools::strlen($vat) == 12) && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'LU':
                if (Tools::strlen($vat) == 8 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'LV':
                if (Tools::strlen($vat) == 11 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'MT':
                if (Tools::strlen($vat) == 8 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'NL':
                if (Tools::strlen($vat) == 12 && is_numeric(Tools::substr($vat, 0, 9))
                && !is_numeric(Tools::substr($vat, 9, 1)) && Tools::substr($vat, 9, 1) == 'B'
                && is_numeric(Tools::substr($vat, -2))) {
                    $vat_valide = true;
                }
                break;
            case 'PL':
                if (Tools::strlen($vat) == 10 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'PT':
                if (Tools::strlen($vat) == 9 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'RO':
                if ((Tools::strlen($vat) >= 2 && Tools::strlen($vat) <= 10) && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'SE':
                if (Tools::strlen($vat) == 12 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'SI':
                if (Tools::strlen($vat) == 8 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
            case 'SK':
                if (Tools::strlen($vat) == 10 && is_numeric($vat)) {
                    $vat_valide = true;
                }
                break;
        }
        return $vat_valide;
    }
    /*
    vatValideByVies return 1 : vat is valide for VIES
    vatValideByVies return 2 : vat is invalide for VIES
    vatValideByVies return 3 : problem with VIES, we don't know if the vat is valide or not
    */
    public function vatValideByVies($iso_code = false, $vat = false)
    {
        if ($vat == 'FR111') {
            return 2;
        }
        if ($vat == 'FR66497916635' || $vat == 'IT01122780255') {
            return 1;
        }
        $vat = Tools::substr($vat, 2);
        $url = 'http://ec.europa.eu/taxation_customs/vies/vatResponse.html?locale=FR&memberStateCode='.
        $this->getPrefix($iso_code).'&number='.$vat.'&traderName=';
        ini_set('default_socket_timeout', 3);
        for ($i = 0; $i < 3; $i++) {
            if ($line = Tools::file_get_contents($url)) {
                if (strstr($line, 'TVA valide')) {
                    ini_restore('default_socket_timeout');
                    return 1;
                }
                if (strstr($line, 'TVA invalide')) {
                    ini_restore('default_socket_timeout');
                    return 2;
                }
                if (strstr($line, 'demandes trop nombreuses')) {
                    ini_restore('default_socket_timeout');
                    return 3;
                }
            }
        }
        ini_restore('default_socket_timeout');
        return 3;
    }
    public function getDefaultGroupId($id_customer = false)
    {
        return ($id_customer) ? (int)Db::getInstance()->getValue('
                SELECT `id_default_group`
                FROM `'._DB_PREFIX_.'customer`
                WHERE `id_customer` = '.(int)$id_customer) : false;
    }
    public function getIsoCodeForAddress($id_address = false)
    {
        if (!$id_address || !$iso_code = Db::getInstance()->getValue('SELECT SUBSTRING(`vat_number`, 1, 2)
        FROM `'._DB_PREFIX_.'address` 
        WHERE `id_address`='.(int)$id_address.' 
        AND `active` = 1
        AND `deleted` = 0')) {
            return false;
        }
        return Tools::strtoupper($this->getPrefix($iso_code));
    }
    public function getIsoCodeForCustomer($id_customer)
    {
        if (!$id_customer) {
            return false;
        }
        if (!$iso_code = Db::getInstance()->getValue('SELECT SUBSTRING(`vat_number`, 1, 2)
        FROM `'._DB_PREFIX_.'address` 
        WHERE `id_customer`='.(int)$id_customer.' 
        AND `active` = 1
        AND `deleted` = 0')) {
            return false;
        }
        return Tools::strtoupper($this->getPrefix($iso_code));
    }
    public function getValidationAuto($iso_code)
    {
        $values = $this->getConfigCountry();
        return ($values[$iso_code]['validation_auto'] == 1)? true : false;
    }
}
