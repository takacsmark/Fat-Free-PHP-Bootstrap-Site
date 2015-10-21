<?php

require_once("vendor/autoload.php");

$f3 = Base::instance();

$f3->config('config.ini');
$f3->config('routes.ini');

new Session();

$f3->run();
