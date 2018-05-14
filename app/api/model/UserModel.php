<?php
$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath."/config/DB.php");


class UserModel {

    public static function authenticateUser($input,$db){
      
      try {

            $stmt = $db->prepare("SELECT * FROM tbl_login WHERE Email = :uname AND UserType = :type AND Status = :one");
            $stmt->execute(array(':uname' => $input['username'],':type'=>$input['Type'],':one'=>1));
            
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                $salt = $userRow['Salt'];
                $encrypted_password = $userRow['EncryptPass'];
                $hash =  UserModel::checkhashSSHA($salt, $input['password']);
                 // check for password equality
                if ($encrypted_password == $hash) {
                    // user authentication details are correct
                   
                    return $userRow;
                }
            }else{
                return false;
            }
        } catch (PDOException $e) {
          
            echo $e->getMessage();
        }
    }

 /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($Password) {
 
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($Password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
 
    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
      public function checkhashSSHA($salt, $Password) {
 
        $hash = base64_encode(sha1($Password . $salt, true) . $salt);
 
        return $hash;
    }

    public function is_loggedin() {
        if (isset($_SESSION['LoginDetails'])) {
            return true;
        }
    }

    public function redirect($url) {
        header("Location: $url");
    }

    public function logout() {
        session_destroy();
        unset($_SESSION['LoginDetails']);
        return true;
    }
    
     public function get_colum_name($db,$table_name, $col_id, $col_value, $sel = 0) {

        try {
            $stmt = $db->prepare("SELECT $col_value FROM $table_name WHERE $col_id=:dbkey");
            $stmt->execute(array(':dbkey' => $sel));
            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($stmt->rowCount() > 0) {
                $res = $userRow["$col_value"];
                return $res;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
