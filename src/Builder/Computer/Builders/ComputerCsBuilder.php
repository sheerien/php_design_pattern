<?php
namespace PhpDesignPattern\Builder\Computer\Builders;

use PhpDesignPattern\Builder\Builder;
use PhpDesignPattern\Builder\Computer\Ups;
use PhpDesignPattern\Builder\Computer\Mouse;
use PhpDesignPattern\Builder\Computer\Monitor;
use PhpDesignPattern\Builder\Computer\Keyboard;
use PhpDesignPattern\Builder\Computer\CoolingSystem;
use PhpDesignPattern\Builder\Computer\Types\Computer;
use PhpDesignPattern\Builder\Computer\Types\ComputerCs;
use PhpDesignPattern\Builder\Computer\Motherboard\Motherboard;
use PhpDesignPattern\Builder\Computer\Motherboard\Sockets\Usb;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Cpu;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Gpu;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Ram;
use PhpDesignPattern\Builder\Computer\Motherboard\Sockets\CType;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Disk;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\Sockets;
use PhpDesignPattern\Builder\Computer\Motherboard\MainParts\NetworkCard;

class ComputerCsBuilder extends Builder
{

	/**
	 * Summary of buildMotherboard
	 *
	 * @return Motherboard
	 */
	protected function buildMotherboard():Motherboard 
    {
        $cpu = new Cpu(2.8);
        $ram = new Ram(16);
        $gpu = new Gpu(2);
        $sockets = new Sockets(
            [
                new Usb("3"),
                new Usb("2"),
                new CType(true),
                new CType(true),
                new CType(true)
            ]
        );
        $networkCard = new NetworkCard(5);
        $disk = new Disk("ssd");

        return new Motherboard($cpu, $ram, $gpu, $sockets, $networkCard, $disk);
	}
	
	/**
	 * Summary of buildKeyboard
	 *
	 * @return Keyboard
	 */
	protected function buildKeyboard():Keyboard 
    {
        return new Keyboard(true);
	}
	
	/**
	 * Summary of buildMouse
	 *
	 * @return Mouse
	 */
	protected function buildMouse():Mouse 
    {
        return new Mouse(false);
	}
	
	/**
	 * Summary of buildMonitor
	 *
	 * @return Monitor
	 */
	protected function buildMonitor():Monitor 
    {
        return new Monitor("4k");
	}
	
	/**
	 * Summary of buildCoolingSystem
	 *
	 * @return CoolingSystem
	 */
	protected function buildCoolingSystem():CoolingSystem 
    {
        return new CoolingSystem(5);
	}
	
	/**
	 * Summary of buildUps
	 *
	 * @return Ups
	 */
	protected function buildUps():Ups 
    {
        return new Ups(96);
	}
	
	/**
	 * Summary of buildComputer
	 *
	 * @return Computer

     */
	public function buildComputer():Computer
    {
        $computer = new ComputerCs();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMotherboard($this->buildMotherboard());
        $computer->setCs($this->buildCoolingSystem());
        return $computer;
	}
}