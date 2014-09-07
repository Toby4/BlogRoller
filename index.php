<?php
require "inc/Slim/Slim.php";

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$blog = array();
$blog["name"] = "Monty's Blog";
$blog["description"] = "My blog";

$app->get('/', function() {
    echo "Hello World";
});

$app->get('/:name', function($name) {
    echo "Hello, ".$name;
});


ob_start("ob_gzhandler");

include("inc/header.php");

$app->run();

include("inc/footer.php");
