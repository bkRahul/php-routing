<?php

use App\Core\{Router, Request};

require 'vendor/autoload.php';

$database = require 'Core/bootstrap.php';

Router::load('App/routes.php')		//load up the routes file

		->direct(Request::uri(), Request::method());		//direct the requests, chaining - require the returned uri and type of request method as arguments

?>