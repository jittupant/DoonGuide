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

            return false;
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

    public function Delete($input, $db) {
        try {
            $stmt = $db->prepare("Select DbKey,CountryDbKey,StateDbKey,CityDbKey,Locality From tbl_locality WHERE DbKey = :f1");
            if ($stmt->execute(array(':f1' => $input['DbKey']))) {
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
    public function GetLocalityName($db) {
        try {

            $stmt = $db->prepare("Select DbKey,Locality From tbl_locality WHERE Status = :f1 AND DeleteStatus = :f2");
           
            if ($stmt->execute(array(':f1' => 1,':f2'=> 1))) {
                
                return $stmt->fetchall(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {

            return false;
        }
    }




public function AllLocality($input,$db) {
        
        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_locality WHERE DeleteStatus = 1";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= ' AND Locality LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR Status LIKE "%' . $input["search"]["value"] . '%" ';
        }
       
        if ($input["length"] != -1) {
            $query .= ' LIMIT ' . $input['start'] . ', ' . $input['length'];
        }
        $stmt = $db->prepare("SELECT COUNT(*) From tbl_locality WHERE DeleteStatus = 1");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
       
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
      
        foreach ($result as $row) {
           
            if($row['Status'] == 0){
                $Status = '<span class="label label-danger">Inactive</span>';
               $function = "Active";
            $icon = "https://cdn0.iconfinder.com/data/icons/round-ui-icons/128/tick_green.png";
            }else{
                $Status = '<span class="label label-success">Active</span>';
                
                $function = "Inactive";
                $icon = "https://www.tilbo.com/wp-content/uploads/2017/09/error-icon-4.png";
            }

            $sub_array = array();
            $CountryName = UserModel::get_colum_name($db,"countries", "countryID", "countryName", $row["CountryDbKey"]);
            
            $StateName = UserModel::get_colum_name($db,"states", "stateID", "stateName", $row["StateDbKey"]);
            
            $CityName = UserModel::get_colum_name($db,"cities", "cityID", "cityName", $row["CityDbKey"]);
            $action = "<img class='imgaction' src='https://cdn3.iconfinder.com/data/icons/block/32/box_edit-512.png' width='10px' height='10px' onclick=LocalityEdit(".$row["DbKey"].")><img class='imgaction' src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFgKzuAIQ4yOIGWA4q8vO3MDAsqKuednnp_uCt2YvS6PvgjDi8' width='40px' height='40px' onclick=LocalityDelete(".$row["DbKey"].")><img class='imgaction' src='".$icon."' width='40px' height='40px' onclick=".$function."(".$row["DbKey"].")>";
            $sub_array[] = $CountryName;
            $sub_array[] = $StateName;
            $sub_array[] = $CityName;
            $sub_array[] = $row["Locality"];
            $sub_array[] = $Status;
            $sub_array[] = $action;
            $data[] = $sub_array;
        }
        $output = array(
            "draw" => intval($input["draw"]),
            "recordsTotal" => $filtered_rows,
            "recordsFiltered" => $totalRow,
            "data" => $data
        );
        return $output;
    }

    public function DeleteLocality($input,$db){
          $date = Date('d-m-Y H:i:s');
          $dateunix = strtotime($date);
        try {
            $stmt = $db->prepare("UPDATE `tbl_locality` SET `DeleteStatus`= :f1,UpdatedOn=:f2 WHERE DbKey = :f3");
        if ($stmt->execute(array(':f1' => 0,':f2' => $dateunix,':f3' => $input['DbKey']))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            return false;
        }
    }

public function ActiveStatus($input,$db){
          $date = Date('d-m-Y H:i:s');
          $dateunix = strtotime($date);
        try {
            $stmt = $db->prepare("UPDATE `tbl_locality` SET `Status`= :f1,UpdatedOn=:f2 WHERE DbKey = :f3");
        if ($stmt->execute(array(':f1' => 1,':f2' => $dateunix,':f3' => $input['DbKey']))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            return false;
        }
    }

public function InActiveStatus($input,$db){
          $date = Date('d-m-Y H:i:s');
          $dateunix = strtotime($date);
        try {
            $stmt = $db->prepare("UPDATE `tbl_locality` SET `Status`= :f1,UpdatedOn=:f2 WHERE DbKey = :f3");
        if ($stmt->execute(array(':f1' => 0,':f2' => $dateunix,':f3' => $input['DbKey']))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            return false;
        }


    }
 }
