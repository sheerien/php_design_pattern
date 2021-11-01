<?php
namespace PhpDesignPattern\Builder\Computer\Types;

use PhpDesignPattern\Builder\Computer\CoolingSystem;
use PhpDesignPattern\Builder\Computer\Types\contracts\ICoolingSystem;



class ComputerCs extends Computer implements ICoolingSystem
{

    private CoolingSystem $cs;
	/**
	 *
	 * @return bool
	 */
	public function turnOn(): bool 
    {
        //do something and then
        return true;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function turnOff(): bool 
    {
        //do something
        return true;
	}
	/**
	 * Summary of coolDown
	 *
	 * @param int $temp 
	 *
	 * @return bool
	 */
	public function coolDown(int $temp): bool 
    {
        //do something to cool down to $temp
        return true;
	}

    /**
     * Set the value of cs
     *
     * @return  self
     */ 
    public function setCs($cs)
    {
        $this->cs = $cs;

        return $this;
    }

    /**
     * Get the value of cs
     */ 
    public function getCs()
    {
        return $this->cs;
    }
}