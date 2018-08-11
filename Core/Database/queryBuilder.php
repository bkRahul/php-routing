<?php

class QueryBuilder {

	protected $pdo;

	public function __construct($pdo){		//initializes the pdo object passed 

		$this->pdo = $pdo;		

	}

	public function select($table) {

		$statement = $this->pdo->prepare("Select * from {$table}");		//accepts the pdo from constructor and prepares the query

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);		

	}

  public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>