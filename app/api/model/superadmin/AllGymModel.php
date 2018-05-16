<?php

$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath . "/config/DB.php");

class AllGymModel {

    public function AddAllGym($input, $db) {
       $date = date('m-d-Y');
        try {
                $stmt = $db->prepare("INSERT INTO tbl_gym(DbKey,GymName,Description,ProfilePicture,Video,VirtualTour,FullAddress,Gallery,LocalityDbKey,Payment,PaymentByDbKey,Remarks,Status) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9,:f10,:f11,:f12,:f13,:f14,:f15)");

            if ($stmt->execute(array(':f1' => $input['GymName'],':f2' => $input['Description'], ':f3' => $input['ProfilePicture'], ':f4' => $input['Video'], ':f5' => $input['VirtualTour'], ':f6' => $input['FullAddress'], ':f7' => $input['Gallery'], ':f8' => $input['LocalityID'], ':f9' => $input['Payment'], ':f10' => $input['PaymentBy'], ':f11' => $input['Remarks'], ':f12' => $input['Status'], 'f16' => $date))) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }
    
    public function AllGym($input,$db) {

        $query = '';
        $output = array();
        $query .= "SELECT * FROM tbl_gym";
        if (isset($input["DbKey"]["value"]) && $input["search"]["value"] !== "") {
            $query .= ' WHERE GymName LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR Description LIKE "%' . $input["search"]["value"] . '%" ';
        }
        
        if ($input["length"] != -1) {
            $query .= ' LIMIT ' . $input['start'] . ', ' . $input['length'];
        }

        $stmt = $db->prepare("SELECT COUNT(*) From tbl_gym");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
       
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
       
        foreach ($result as $row) {
           
            $sub_array = array();
            $LocalityName = UserModel::get_colum_name($db,"tbl_locality", "DbKey", "Name", $row["LocalityDbKey"]);
            
           
            $sub_array[] = $row["GymName"];
            $sub_array[] = $row["Description"];
            $sub_array[] = $row["ProfilePicture"];
            $sub_array[] = $row["Video"];
            $sub_array[] = $row["VirtualTour"];
            $sub_array[] = $row["FullAddress"];
            $sub_array[] = $row["Gallery"];
             $sub_array[] = $LocalityName;
            $sub_array[] = $row["Payment"];
            $sub_array[] = $row["PaymentBy"];
            $sub_array[] = $row["Remarks"];
            $sub_array[] = $row["Status"];
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
    
   

}
