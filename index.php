<?php

require 'vendor/autoload.php';

$database = require 'Core/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());		//chaining - require the returned uri and type of request method as arguments

?>