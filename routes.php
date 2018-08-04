<?php

//routes will register our uri and controller endpoints in the method define()

$router->define([		
		
			'php-routing' => 'Controllers/index.php',

			'php-routing/about' => 'Controllers/about.php',
			
			'php-routing/contact' => 'Controllers/contact.php',
			
			'php-routing/about/culture' => 'Controllers/about-culture.php'
		]);

?>