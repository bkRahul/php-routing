<?php

class Router {

	public $routes = [		//register routes specifically  for the TYPE of requests 

		'GET' => [],

		'POST' => []

	];		//create a new empty array
	

	public static function load($file) {		//create a static function load which accepts a file parameter

		$router = new static;		//create a new static instance using new static or self

		require $file;		//require a file in this case (routes.php which calls define() function)

		return $router;		//return the static router instance variable 

	}

	public function get($uri, $controller) {		//accept the uri with the GET request type 

		$this->routes['GET'][$uri] = $controller;

	}

	public function post($uri, $controller) {		//accept the uri with the POST request type

		$this->routes['POST'][$uri] = $controller;

	}

//direct the uri and return routes specified
	public function direct($uri, $requestType) {

		if (array_key_exists($uri, $this->routes[$requestType]))	{		//array_key _exists(key, search) searches through the array for a specified key 													
			return $this->routes[$requestType][$uri];		//given a uri if a key exists in the array with a request type, return the uri						

		}

		throw new Exception('No routes defined for this URI'.$uri);
		
	}

	
}

?>