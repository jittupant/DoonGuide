<?php
session_start();
header('X-Frame-Options: SAMEORIGIN');

define('site_base_url', 'http://' . $_SERVER['SERVER_NAME']);

require_once('app/include/common.inc.php');

require_once('app/include/handlers.inc.php');

go();

