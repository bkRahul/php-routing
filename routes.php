<?php

//routes will register our uri and controller endpoints in the method define()

// $router->define([		
		
// 			'php-routing' => 'Controllers/index.php',

// 			'php-routing/about' => 'Controllers/about.php',
			
// 			'php-routing/contact' => 'Controllers/contact.php',
			
// 			'php-routing/about/culture' => 'Controllers/about-culture.php',

// 			'php-routing/names' => 'Controllers/add-name.php'
// 		]);
		

/*Used when we need to get routes through diff methods*/

	$router->get('php-routing' , 'Controllers/index.php');

	$router->get('php-routing/about' , 'Controllers/about.php');

	$router->get('php-routing/contact' , 'Controllers/contact.php');

	$router->get('php-routing/about/culture' , 'Controllers/about-culture.php');

	$router->post('php-routing/names' , 'Controllers/add-name.php');

var_dump($router->routes);

?>