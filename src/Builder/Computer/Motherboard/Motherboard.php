<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard;

use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Cpu;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Disk;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Gpu;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\NetworkCard;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Ram;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Sockets;

class Motherboard
{
    private Cpu $cpu;
    private Ram $ram;
    private Gpu $gpu;
    private Sockets $sockets;
    private NetworkCard $networkCard;
    private Disk $disk;

    /**
     * Summary of __construct
     * @param Cpu $cpu
     * @param Ram $ram
     * @param Gpu $gpu
     * @param Sockets $sockets
     * @param NetworkCard $networkCard
     * @param Disk $disk
     */
    public function __construct(Cpu $cpu, Ram $ram, Gpu $gpu, Sockets $sockets, NetworkCard $networkCard, Disk $disk)
    {
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->gpu = $gpu;
        $this->sockets = $sockets;
        $this->networkCard = $networkCard;
        $this->disk = $disk;
        
    }

    
	/**
	 * 
	 * @return Cpu
	 */
	function getCpu(): Cpu 
    {
		return $this->cpu;
	}

	/**
	 * 
	 * @return Ram
     */
	function getRam(): Ram 
    {
		return $this->ram;
	}

	/**
	 * 
	 * @return Gpu
     */
	function getGpu(): Gpu 
    {
		return $this->gpu;
	}

	/**
	 * 
	 * @return Sockets
     */
	function getSockets(): Sockets 
    {
		return $this->sockets;
	}

	/**
	 * 
	 * @return NetworkCard
	 */
	function getNetworkCard(): NetworkCard 
    {
		return $this->networkCard;
	}

	/**
	 * 
	 * @return Disk
	 */
	function getDisk(): Disk 
    {
		return $this->disk;
	}

}