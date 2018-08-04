<?php

class Connection {

	public static function make($config) {		//gets passed $config['database'] as parameter 

		try {

				return new PDO($config['host'].';dbname='.$config['dbname'],$config['username'],$config['password'], $config['options']);

		}

		catch (PDOException $e) {		//catches the exception and store it into $e 

			die($e->getMessage());		//displays the error message when connection is failed

		}

	}

}

?>