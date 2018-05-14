<?php


class Config {
    
    static function getEnv(){
        $environment = getenv("application_environment");
        if($environment == FALSE) $environment = Config::ENV_PRODUCTION;
        return $environment;
    }

    const ENV_DEBUG = "debug";
    const ENV_PRODUCTION = "production";

    static function getEnvPrefix(){
        return getenv("environment_prefix");
    }
}