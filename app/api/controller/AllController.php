<?php
/**
 * @uri /getcountryname
 */
class GetCountryName extends AppResource {

     function get($request) {
        $res = array();
        $response = Response::OK;
        
        try {
            $db = DB::getDB();
            $CountryName = AllModel::GetCountryName($db);
            if ($CountryName) {
                $res['CountryName'] = $CountryName;
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }
}
/**
 * @uri /getstatename
 */
class GetStateName extends AppResource {

     function get($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $StateName = AllModel::GetStateName($input,$db);
            if ($StateName) {
                $res['StateName'] = $StateName;
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }

}
/**
 * @uri /getcityname
 */
class GetCityName extends AppResource {

     function get($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $CityName = AllModel::GetCityName($input,$db);
            if ($CityName) {
               // $CityName = preg_replace("/[^a-zA-Z 0-9]+/", "", $CityName );
                $res['CityName'] = $CityName;
                $res['error'] = 1;
            }
          //  print_r($CityName);
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }

}

/**
 * @uri /locality
 */
class Locality extends AppResource {
    
    function post($request){
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
         try {
            $db = DB::getDB();
            $CityName = AllModel::AddLocality($input,$db);
            if ($CityName) {
               // $CityName = preg_replace("/[^a-zA-Z 0-9]+/", "", $CityName );
                $res['msg'] = "Locality Added Sucsessfully";
                $res['error'] = 1;
            }
          //  print_r($CityName);
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Locality Details";
            $res['error'] = 0;
        }
        
        
           return $this->createResponse($request, jsonp_encode($res), $response);
        
    }
            
     function get($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        try {
            $db = DB::getDB();
            $CityName = AllModel::GetCityName($input,$db);
            if ($CityName) {
               // $CityName = preg_replace("/[^a-zA-Z 0-9]+/", "", $CityName );
                $res['CityName'] = $CityName;
                $res['error'] = 1;
            }
          //  print_r($CityName);
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }



        return $this->createResponse($request, jsonp_encode($res), $response);
    }

}