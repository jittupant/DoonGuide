<?php

class ResourceTestWrapper {

    const TEST_USER = 'testuser';
    const TEST_PASS = 'testpass';

    private $request;
    private $resource;

    private $username;
    private $password;

    public function __construct($config, $dbname) {
        
        $this->setUsernamePassword($config);
        $this->request = new Request($config);
        $this->resource = $this->getResource($this->request, $dbname);
    }

    public function get() {
        return $this->makeRequest("get");
    }

    public function put() {
        return $this->makeRequest("put");
    }

    public function post() {
        return $this->makeRequest("post");
    }

    public function delete() {
        return $this->makeRequest("delete");
    }

    private function makeRequest($method) {
        $_SERVER['PHP_AUTH_USER'] = $this->username;
        $_SERVER['PHP_AUTH_PW'] = $this->password;
        $this->request->method = $method;
        $clone = clone($this->resource);
        return $clone->exec($this->request);
    }

    private function setUsernamePassword($config) {
        if (isset($config['username'])) $this->username = $config['username'];
        else $this->username = ResourceTestWrapper::TEST_USER;
        if (isset($config['password'])) $this->password = $config['password'];
        else $this->password = ResourceTestWrapper::TEST_PASS;
    }

    private function getResource($request, $dbname) {
        $resource = $request->loadResource();
        $resource->dbname = $dbname;
        $user = new UserModel($resource->getDB(), $this::TEST_USER);
        //if (!$user->existsInDB()) $user->save(['password' => $this::TEST_PASS]);
        return $resource;
    }

}
