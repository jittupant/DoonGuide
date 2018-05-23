<?php


/**
 * @uri /gym
 */
class Gym extends AppResource {

    function post($request) {
        $res = array();
        $response = Response::OK;
        $input = $this->getInput($request);
        print_r($input);
        print_r($_FILES);
        die();
        try {
            $db = DB::getDB();
            $AddGym = GymModel::AddGym($input, $db);
            if ($AddGym) {
                $res['AddGym'] = $AddGym;
                $res['error'] = 1;
            }
        } catch (NotFoundException $ex) {
            $response = Response::FORBIDDEN;
            $res['msg'] = "Error Found In Area Details";
            $res['error'] = 0;
        }
    }

}
