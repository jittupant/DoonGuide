<?php

$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath . "/config/DB.php");

class AllModel {

    public function AddLocality($input, $db) {
        $date = Date('d-m-Y H:i:s');
        $dateunix = strtotime($date);
        try {
            $stmt = $db->prepare("INSERT INTO tbl_locality(CountryDbKey,StateDbKey,CityDbKey,Locality,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5)");

            if ($stmt->execute(array(':f1' => $input['CountryID'], ':f2' => $input['StateID'], ':f3' => $input['CityID'], ':f4' => $input['txtLocality'], ':f5' => $dateunix))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function GetCountryName($db) {
        try {

            $stmt = $db->prepare("Select countryID,countryName From countries");
            if ($stmt->execute()) {
                return $stmt->fetchall(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function GetStateName($input, $db) {
        try {
            $stmt = $db->prepare("Select stateID,stateName From states WHERE countryID = :f1");
            if ($stmt->execute(array(':f1' => $input['CountryId']))) {
                return $stmt->fetchall(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function GetCityName($input, $db) {
        try {
            $stmt = $db->prepare("Select cityID,cityName From cities WHERE stateID = :f1");
            if ($stmt->execute(array(':f1' => $input['StateId']))) {
                return $stmt->fetchall(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

}
