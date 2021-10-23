<?php
namespace PhpDesignPattern\factory\DbTypes;
use PhpDesignPattern\factory\DbModel\AbstractDB;
use PhpDesignPattern\factory\DbModel\PdoDB;

class PdoType extends DB
{

	/**
	 *
	 * @return AbstractDB
	 */
	public function createDB(): AbstractDB 
    {
        return new PdoDB();
	}
}