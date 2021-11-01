<?php
namespace PhpDesignPattern\Builder\Computer\Types;


use PhpDesignPattern\Builder\Computer\CoolingSystem;
use PhpDesignPattern\Builder\Computer\Types\contracts\ICoolingSystem;
use PhpDesignPattern\Builder\Computer\Types\contracts\IPower;
use PhpDesignPattern\Builder\Computer\Ups;

class ComputerXl extends Computer implements ICoolingSystem, IPower
{
    private CoolingSystem $cs;
    private Ups $ups;

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
	 * Summary of backupPower
	 *
	 * @return bool
	 */
	public function backupPower(): bool 
    {
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
     * Set the value of ups
     *
     * @return  self
     */ 
    public function setUps($ups)
    {
        $this->ups = $ups;

        return $this;
    }

    /**
     * Get the value of cs
     */ 
    public function getCs()
    {
        return $this->cs;
    }

    /**
     * Get the value of ups
     */ 
    public function getUps()
    {
        return $this->ups;
    }
}