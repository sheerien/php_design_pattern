<?php
namespace PhpDesignPattern\factory\DbModel;

class SqliDB extends AbstractDB
{

	/**
	 *
	 * @return mixed
	 */
	public function connectDB() 
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
	}
}