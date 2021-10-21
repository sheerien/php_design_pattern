<?php
namespace PhpDesignPattern\Abstraction;

class PDODB extends DB
{

 /**
  * Summary of dbConnect
  * @return \PDO
  */
	public function dbConnect()
    {
        $conn =new \PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        return $conn;
	}
	
	/**
	 *
	 * @param string $table 
	 * @param string $column 
	 *
	 * @return mixed
	 */
	public function select(string $table, string $column = '*') 
    {

	}
	
	/**
	 *
	 * @param string $column 
	 * @param string $compar 
	 * @param int|string $value 
	 *
	 * @return mixed
	 */
	public function where(string $column, string $compar, int|string $value) 
    {

	}
	
	/**
	 *
	 * @param string $column 
	 * @param string $compar 
	 * @param int|string $value 
	 *
	 * @return mixed
	 */
	public function and(string $column, string $compar, int|string $value) 
    {

	}
	
	/**
	 *
	 * @param string $column 
	 * @param string $compar 
	 * @param int|string $value 
	 *
	 * @return mixed
	 */
	public function or(string $column, string $compar, int|string $value) 
    {
        
	}
}