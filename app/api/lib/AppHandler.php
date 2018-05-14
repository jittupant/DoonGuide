<?php

/**
 * @uri /url
 */
class URLHandler extends AppResource {

    public function get($request) {
        $input = $this->getInput($request);
        $url = new ShortURLModel($input['uuid']);
        return $this->createResponse(jsonp_encode($url));
    }

    public function post($request) {
        $input = $this->getInput($request);
        $url = new ShortURLModel();
        $url->create($input);
        return $this->createResponse($request, jsonp_encode($url));
    }

    public function delete($request) {
        $input = $this->getInput($request);
        $url = new ShortURLModel($input['uuid']);
        $url->delete();
        return $this->createResponse(jsonp_encode($url));
    }
}
