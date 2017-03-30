<?php

namespace NoxIntranet\CommunicationBundle\Twig\Extension;

class EncryptStringExtension extends \Twig_Extension {

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('encryptString', array($this, 'encryptString')),
        );
    }

    // Encrypt la chaîne passé en paramètre.
    public function encryptString($string) {
        return $this->encrypt_decrypt('encrypt', $string);
    }

    public function getName() {
        return 'encryptString_extension';
    }

    // Retourne une chaîne encrypté.
    private function encrypt_decrypt($action, $string) {
        $output = false;

        $encrypt_method = "AES-256-CBC";
        $secret_key = 'uploadUsersKey';
        $secret_iv = 'uploadUsersIv';

        // hash
        $key = hash('sha256', $secret_key);

        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }

}
