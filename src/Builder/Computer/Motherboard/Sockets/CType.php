<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\Sockets;

class CType
{
    /**
     * Summary of 
     * @var bool $withVideoTransfer
     */
    private bool $withVideoTransfer;

    /**
     * Summary of __construct
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    

    /**
     * Get $withVideoTransfer
     *
     * @return  bool
     */ 
    public function getWithVideoTransfer():bool
    {
        return $this->withVideoTransfer;
    }
}