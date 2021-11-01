<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\MainParts;

class Cpu
{
    /**
     * Summary of 
     * @param float $speed
     */
    private float $speed;

    /**
     * Summary of __construct
     * @param float $speed
     */
    public function __construct(float $speed)
    {
        $this->speed = $speed;
    }

    /**
     * Summary of getSpeed
     * @return float
     */
    public function getSpeed():float
    {
        return $this->speed;
    }
}