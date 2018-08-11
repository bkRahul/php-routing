<?php

//return a associative array of database 

return [
	    'database' => [
        'dbname' => 'todo',
        'username' => 'root',
        'password' => '',
        'host' => 'mysql:host=127.0.0.1',
    	'options' => [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]		//Set error mode to display when something goes wrong ERRMODE_WARNING, ERRMODE_EXCEPTION
    	]
	];

?>