<?php

class AppResponse extends Response {

    public function asJSON() {
        return json_decode($this->body);
    }

}
