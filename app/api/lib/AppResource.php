<?php

require_once(dirname(__FILE__) . "/ResourceTestWrapper.php");
require_once(dirname(__FILE__) . "/Crypto.php");

class AppResource extends Resource {

    public $params; //Intercepted for testing
    protected $useruuid;
    private $crypto;

    function __construct($parameters) {

        parent::__construct($parameters);
        $this->params = $parameters;
        $this->crypto = new Crypto();
    }

    public function getInput($request, $isBase64Encoded = false) {

        parse_str($request->data, $input);

        $input += $_GET;
        $input += $_POST;
        if ($isBase64Encoded)
            array_walk($input, "AppResource::decodeBase64");
        if (isset($input['callback']))
            unset($input['callback']);
        if (isset($input['_']))
            unset($input['_']);
        $this->convertNumbers($input);
        $this->convertBooleans($input);

        return $input;
    }

    public function createResponse($request, $message = '', $code = Response::OK) {
        $response = new AppResponse($request);
        $response->code = $code;
        $response->body = $message;
        return $response;
    }

    public function exec($request) {
        if (!$this->isSecureMethod($request) || $this->authenticate($request)) {
            try {
                return parent::exec($request);
            } catch (ConflictException $ex) {
                return $this->createResponse($request, $ex->getMessage(), Response::CONFLICT);
            } catch (BadRequestException $ex) {
                return $this->createResponse($request, $ex->getMessage(), Response::BADREQUEST);
            } catch (ForbiddenException $ex) {
                return $this->createResponse($request, $ex->getMessage(), Response::FORBIDDEN);
            } catch (InternalServerException $ex) {
                return $this->createResponse($request, $ex->getMessage(), Response::INTERNALSERVERERROR);
            } catch (NotFoundException $ex) {
                return $this->createResponse($request, $ex->getMessage(), Response::NOTFOUND);
            }
        } else {
            return $this->createResponse($request, "Forbidden", Response::FORBIDDEN);
        }
    }

    public function getUsername() {
  
        if (isset($_REQUEST['AUTH_USER'])) {
            return $_REQUEST['AUTH_USER'];
        }

        if (isset($_SERVER['PHP_AUTH_USER'])) {
            return $_SERVER['PHP_AUTH_USER'];
        }
    }

    public function getPassword() {
        if (isset($_REQUEST['AUTH_PW'])) {
            return $_REQUEST['AUTH_PW'];
        }

        if (isset($_SERVER['PHP_AUTH_PW'])) {
            return $_SERVER['PHP_AUTH_PW'];
        }
    }


   

    private function convertNumbers(&$array) {
        foreach ($array as $key => $value) {
            if (is_numeric($value) && is_string($value)) {
                $array[$key] = $value * 1;
            }
        }
        return $array;
    }

    private function isSecureMethod($request) {
        $reflectionMethod = new ReflectionMethod($this, $request->method);
        if (strpos($reflectionMethod->getDocComment(), '@secure') !== FALSE)
            return true;
        else
            return false;
    }
      private function authenticate($request){
        try {
            if (isset($_REQUEST['AUTH_USER'])) $this->setUsernameCookie($_REQUEST['AUTH_USER'], $_REQUEST['AUTH_EXPIRE']);
            if (isset($_REQUEST['AUTH_PW'])) $this->setPasswordCookie($_REQUEST['AUTH_PW'], $_REQUEST['AUTH_EXPIRE']);

            // $user = UserModel::authenticateUser($this->getUsername(), $this->getPassword(), $this->getDB());
            // $this->useruuid = $user['uuid'];
            if (isset($_SERVER['PHP_AUTH_USER'])) $this->setUsernameCookie($_SERVER['PHP_AUTH_USER'], $_REQUEST['AUTH_EXPIRE']);
            if (isset($_SERVER['PHP_AUTH_PW'])) $this->setPasswordCookie($_SERVER['PHP_AUTH_PW'], $_REQUEST['AUTH_EXPIRE']);
            return true;
        } catch (NotFoundException $ex) {}

        
        
       
        return false;
    }
 private function setUsernameCookie($username, $expire) {
        if(isset($expire) && is_numeric($expire) && ($expire*1 > 0))  $expire = time()+$expire;
        else $expire = 0;

        if (!headers_sent()) setcookie(Config::getEnvPrefix()."PHP_AUTH_USER", $username, $expire, '/');
    }

    private function setPasswordCookie($password, $expire) {
        if(isset($expire) && is_numeric($expire) && ($expire*1 > 0))  $expire = time()+$expire;
        else $expire = 0;

        if (!headers_sent()) setcookie(Config::getEnvPrefix()."PHP_AUTH_PW", $password, $expire, '/');
        else error_log("already sent");
    }
    private function convertBooleans(&$array) {
        foreach ($array as $key => $value) {
            if (is_string($value) && (strcasecmp($value, 'true') == 0))
                $array[$key] = true;
            else if (is_string($value) && (strcasecmp($value, 'false') == 0))
                $array[$key] = false;
        }
        return $array;
    }

}

function jsonp_encode($array_or_model) {
    if (is_array($array_or_model)) {
        $json = json_encode($array_or_model);
    } else if (is_a($array_or_model, "Model")) {
        $json = $array_or_model->toJSON();
    } else {
        throw new Exception("Input to jsonp_encode must be an Array or a Model");
    }
    if (isset($_GET['callback']) && $_GET['callback'] == 'jsonCallback')
        return "${_GET['callback']}($json)";
    else
        return $json;
}
