<?php

/*Used when we need to get routes through diff methods*/

	$router->get('php-routing' , 'PagesController@home');

	$router->get('php-routing/about' , 'PagesController@about');

	$router->get('php-routing/contact' , 'PagesController@contact');

	$router->get('php-routing/about/culture' , 'PagesController@aboutCulture');

	$router->post('php-routing/names' , '/add-name.php');		 



	$router->get('php-routing/users' , 'UsersControllers@index');

	$router->post('php-routing/users' , 'UsersControllers@store');
?>