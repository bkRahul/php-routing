<?php

$app = [];


$app['config'] = require 'config.php';		//stores the returned associative array into $config

require 'Core/Database/connection.php';

require 'Core/Database/queryBuilder.php';

require 'Core/router.php';

require 'Core/request.php';

require 'Task.php';


$app['database'] = new queryBuilder(Connection::make($app['config']['database']));

return new QueryBuilder(Connection::make($app['config']['database']));		// Instantiate QueryBuilder by passing instance of PDO which gets  $config['database'] passed as array parameter into the static make function of Connection


?>