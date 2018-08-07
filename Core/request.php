<?php

//fetch information abuot current browser request

class Request {

	public static function uri() {
		
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');		//use $_SERVER global variable to request uri

		//parse_url() accepts a uri and a specific part which user wants as second arg

	}

	public static function method() {
		return $_SERVER['REQUEST_METHOD'];
	}
}

?>