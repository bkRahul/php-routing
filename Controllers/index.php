<?php

$users = $app['database']->select('users');

require 'Views/index.view.php';


?>