<?php

$database = require 'Core/bootstrap.php';

//$router = new Router();		//create instance of router

//require 'routes.php';		//load up our routes 

//$uri = trim($_SERVER['REQUEST_URI'], '/');		//use $_SERVER global variable to request uri


//require $router->direct($uri);		//direct the traffic to specified uri

//var_dump($uri);



//die(var_dump($app));

$uri = Request::uri();

$router = Router::load('routes.php');		//call the static load method by passing routes.php as parameter

require $router->direct($uri);		//require the direct() method by passing uri 

//require Router::load('routes.php')->direct($uri);		//chaining require the returned  

?>