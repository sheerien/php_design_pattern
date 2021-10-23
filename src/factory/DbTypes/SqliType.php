<?php
namespace PhpDesignPattern\factory\DbTypes;

use PhpDesignPattern\factory\DbModel\AbstractDB;
use PhpDesignPattern\factory\DbModel\SqliDB;

class SqliType extends DB
{

	/**
	 *
	 * @return AbstractDB
	 */
	public function createDB(): AbstractDB 
    {
        return new SqliDB();
	}
}