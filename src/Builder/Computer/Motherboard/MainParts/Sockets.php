<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\MainParts;

class Sockets
{
    /**
     * Summary of 
     * @var array $sockets
     */
    private array $sockets;


    /**
     * Summary of __construct
     * @param array $sockets
     */
    public function __construct(array $sockets)
    {
        $this->sockets = $sockets;
    }

    

    /**
     * Get $sockets
     *
     * @return  array
     */ 
    public function getSockets():array
    {
        return $this->sockets;
    }
}