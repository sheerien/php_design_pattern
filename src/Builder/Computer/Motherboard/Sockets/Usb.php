<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\Sockets;

class Usb
{
    /**
     * Summary of 
     * @var string $version
     */
    private string $version;

    /**
     * Summary of __construct
     * @param string $version
     */
    public function __construct(string $version)
    {
        $this->$version = $version;
    }

    

    /**
     * Get $version
     *
     * @return  string
     */ 
    public function getVersion():string
    {
        return $this->version;
    }
}