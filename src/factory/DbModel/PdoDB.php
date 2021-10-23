<?php
namespace PhpDesignPattern\factory\DbModel;

class PdoDB extends AbstractDB
{

	/**
	 *
	 * @return mixed
	 */
	public function connectDB() 
    {
		$conn =new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        return $conn;
	}
}