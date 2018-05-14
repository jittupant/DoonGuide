<?php

require_once(dirname(__FILE__) . "/config.php");    

class DB {

    public static function getDB() {
       
        $servername = "localhost";
        $dbName = "doonguide";
        $username = "root";
        $password = "";
        try {
             $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function encryptPassword($password) {
        return crypt($password, md5($password));
    }

    public static function stripID($array) {
        unset($array['_id']);
        return $array;
    }

}
