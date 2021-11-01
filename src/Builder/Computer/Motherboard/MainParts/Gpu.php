<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\MainParts;

class Gpu
{
    /**
     * Summary of 
     * @var int $size
     */
    private int $size;

    /**
     * Summary of __construct
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    

    /**
     * Get $size
     *
     * @return  int
     */ 
    public function getSize():int
    {
        return $this->size;
    }
}