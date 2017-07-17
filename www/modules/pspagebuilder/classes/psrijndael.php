<?php
/**
 * Pts Prestashop Theme Framework for Prestashop 1.6.x
 *
 * @package   pspagebuilder
 * @version   5.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 prestabrain.com <@emai:prestabrain@gmail.com>
 *               <info@prestabrain.com>.All rights reserved.
 * @license   GNU General Public License version 2
 */

class Psrijndael
{
    protected $_key;
    protected $_iv;

    public function __construct($key, $iv)
    {
        $this->_key = $key;
        $this->_iv = self::base64Decode($iv);
    }

    /**
     * Base64 is not required, but it is be more compact than urlencode
     *
     * @param string $plaintext
     * @return bool|string
     */
    public function encrypt($plaintext)
    {
        $length = (ini_get('mbstring.func_overload') & 2) ? mb_strlen($plaintext, ini_get('default_charset')) : Tools::strlen($plaintext);

        if ($length >= 1048576) {
            return false;
        }
        return self::base64Encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->_key, $plaintext, MCRYPT_MODE_ECB, $this->_iv)).sprintf('%06d', $length);
    }

    public function decrypt($ciphertext)
    {
        if (ini_get('mbstring.func_overload') & 2) {
            $length = (int)(mb_substr($ciphertext, -6, 6, ini_get('default_charset')));
            $ciphertext = mb_substr($ciphertext, 0, -6, ini_get('default_charset'));
            return mb_substr(
                mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->_key, self::base64Decode($ciphertext), MCRYPT_MODE_ECB, $this->_iv),
                0,
                $length,
                ini_get('default_charset')
            );
        } else {
            $length = (int)(Tools::substr($ciphertext, -6));
            $ciphertext = Tools::substr($ciphertext, 0, -6);
            return Tools::substr(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->_key, self::base64Decode($ciphertext), MCRYPT_MODE_ECB, $this->_iv), 0, $length);
        }
    }

    public static function base64Decode($data)
    {
        return call_user_func('base64_decode', $data);
    }

    public static function base64Encode($data)
    {
        return call_user_func('base64_encode', $data);
    }
}
