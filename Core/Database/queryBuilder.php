<?php

class QueryBuilder {

	protected $pdo;

	public function __construct($pdo){		//initializes the pdo object passed 

		$this->pdo = $pdo;		

	}

	public function selectAllTasks($table, $intoClass) {

		$statement = $this->pdo->prepare("Select * from {$table}");		//accepts the pdo from constructor and prepares the query

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);		

	}

}

?>