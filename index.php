<?php

require_once 'vendor/autoload.php';

$app = new \Slim\Slim();

$controller = \APIDesign\Controllers\Base::getController();

$app->get('/', function () use ($controller) {
    echo $controller->hello('world');
});

$app->run();