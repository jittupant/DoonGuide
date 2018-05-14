<?php

/**
 * @uri /allgym
 */
class AllGym extends AppResource {

    function post($request) {
        
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
            try {
                $db = DB::getDB();
                $AllGymInsert = AllGymModel::AddAllGym($input, $db);
                if ($MemberPropertyMappingInsert) {
                    $res['msg'] = "Gym Added Succsefully";
                    $res['error'] = 1;
                }
            } catch (NotFoundException $ex) {
                $response = Response::FORBIDDEN;
            }


        return $this->createResponse($request, jsonp_encode($res), $response);
    }

   function get($request) {
       $response = Response::OK;
     $input = $this->getInput($request);
       try {
           $db = DB::getDB();
           $AllGym = AllGymModel::AllGym($input,$db);
            
              
       } catch (NotFoundException $ex) {
           $response = Response::FORBIDDEN;
        }

       
     return $this->createResponse($request, jsonp_encode($AllGym), $response);
   }

}

