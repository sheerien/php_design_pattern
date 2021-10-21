<?php
namespace PhpDesignPattern\Abstraction;

class SQLIDB extends DB
{

	/**
	 *
	 * @return mixed
	 */
	public function dbConnect() 
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
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