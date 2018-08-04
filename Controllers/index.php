<?php


$tasks = $app['database']->selectAllTasks('todos','Task');		//passes the tablename to fetch values and classname to store the values 

require 'Views/index.view.php';



?>