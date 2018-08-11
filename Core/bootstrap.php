<?php

$app = [];		//create a new empty array 


$app['config'] = require 'config.php';		//stores the returned associative array into $config


require 'Core/Database/queryBuilder.php';


$app['database'] = new queryBuilder(Connection::make($app['config']['database']));


?>