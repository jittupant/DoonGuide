<?php

ini_set('display_errors', 1);
// load Tonic library
require_once(dirname(__FILE__) . '/lib/tonic.php');
require_once(dirname(__FILE__) . '/config/config.php');
require_once(dirname(__FILE__) . '/config/DB.php');
require_once(dirname(__FILE__) . '/lib/AppResource.php');
require_once(dirname(__FILE__) . '/lib/AppResponse.php');
require_once(dirname(__FILE__) . '/lib/exceptions.php');
require_once(dirname(__FILE__) . '/lib/AppHandler.php');
require_once(dirname(__FILE__) . '/controller/UserController.php');
require_once(dirname(__FILE__) . '/model/UserModel.php');
require_once(dirname(__FILE__) . '/controller/AllController.php');
require_once(dirname(__FILE__) . '/model/AllModel.php');
require_once(dirname(__FILE__) . '/controller/superadmin/GymController.php');
require_once(dirname(__FILE__) . '/model/superadmin/GymModel.php');

// handle request
$request = new Request(array('baseUri' => '/doonguide/app/api'));

try {
    $resource = $request->loadResource();
    $response = $resource->exec($request);
} catch (ResponseException $e) {
    switch ($e->getCode()) {
        case Response::UNAUTHORIZED:
            $response = $e->response($request);
            $response->addHeader('WWW-Authenticate', 'Basic realm="DTS"');
            break;
        default:
            $response = $e->response($request);
    }
}
$response->output();


