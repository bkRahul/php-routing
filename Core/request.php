<?php

//fetch information abuot current browser request

class Request {

	public static function uri() {
		
		return trim($_SERVER['REQUEST_URI'], '/');		//use $_SERVER global variable to request uri

		

	}
}

?>