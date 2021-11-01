<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\MainParts;

class NetworkCard
{
    /**
     * Summary of 
     * @var int $category
     */
    private int $category;

    /**
     * Summary of __construct
     * @param int $category
     */
    public function __construct(int $category)
    {
        $this->category = $category;
    }

    

    /**
     * Get $category
     *
     * @return  int
     */ 
    public function getCategory():int
    {
        return $this->category;
    }
}