<?php

$dirPath = realpath(dirname(__FILE__) . '/..');
require_once($dirPath . "/config/DB.php");

class AllGymModel {

    public function AddAllGym($input, $db) {
       $date = date('m-d-Y');
        try {
                $stmt = $db->prepare("INSERT INTO tbl_memberpropertymapping(SocietyDbKey,MembershipNumber,OwnershipType,MemberDbKey,PropertyDbKey,OwnershipFrom,OwnershipTo,PropertyStatus,CreatedOn) VALUES (:f1,:f2,:f3,:f4,:f5,:f6,:f7,:f8,:f9)");

            if ($stmt->execute(array(':f1' => $input['SocietyID'],':f2' => $input['MembershipNumber'], ':f3' => $input['OwnershipType'], ':f4' => $input['Member'], ':f5' => $input['Property'], ':f6' => $input['OwnershipFrom'], ':f7' => $input['OwnershipTo'], ':f8' => $input['PropertyStatus'], 'f9' => $date))) {
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
        $query .= "SELECT * FROM tbl_memberpropertymapping";
        if (isset($input["search"]["value"]) && $input["search"]["value"] !== "") {
            $query .= ' WHERE MembershipNumber LIKE "%' . $input["search"]["value"] . '%" ';
            $query .= 'OR OwnershipType LIKE "%' . $input["search"]["value"] . '%" ';
        }
        
        if ($input["length"] != -1) {
            $query .= ' LIMIT ' . $input['start'] . ', ' . $input['length'];
        }

        $stmt = $db->prepare("SELECT COUNT(*) From tbl_memberpropertymapping");
        $stmt->execute();
        $totalRow =  $stmt->fetchColumn();
        $statement = $db->prepare($query);
       
        $statement->execute();
        $result = $statement->fetchAll();
        $data = array();
        $filtered_rows = $statement->rowCount();
       
        foreach ($result as $row) {
           
            $sub_array = array();
            $SocietyName = UserModel::get_colum_name($db,"tbl_society", "DbKey", "Name", $row["SocietyDbKey"]);
            $PropertyName = UserModel::get_colum_name($db,"tbl_property", "DbKey", "PropertyDisplayName", $row["PropertyDbKey"]);
            $MemberName = UserModel::get_colum_name($db,"tbl_member", "DbKey", "FirstName", $row["MemberDbKey"]);
            $sub_array[] = $SocietyName;
            $sub_array[] = $row["MembershipNumber"];
            $sub_array[] = $MemberName;
            $sub_array[] = $PropertyName;
            $sub_array[] = $row["OwnershipFrom"];
            $sub_array[] = $row["OwnershipTo"];
            $sub_array[] = $row["PropertyStatus"];
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
