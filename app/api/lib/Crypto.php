<?php


class Crypto {

    private $encryptionMethod = "AES-256-CBC";
    private $secretHash = "25c6c7ff35b9979b151f2136cd13b0ff";
    private $iv = "25c6c7ff35b9979b";

    public function encrypt($password) {
        return openssl_encrypt($password, $this->encryptionMethod, $this->secretHash, false, $this->iv);
    }

    public function decrypt($password) {
        return openssl_decrypt($password, $this->encryptionMethod, $this->secretHash, false, $this->iv);
    }
}