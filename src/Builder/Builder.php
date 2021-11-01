<?php
namespace PhpDesignPattern\Builder;

use PhpDesignPattern\Builder\Computer\CoolingSystem;
use PhpDesignPattern\Builder\Computer\Keyboard;
use PhpDesignPattern\Builder\Computer\Monitor;
use PhpDesignPattern\Builder\Computer\Motherboard\Motherboard;
use PhpDesignPattern\Builder\Computer\Mouse;
use PhpDesignPattern\Builder\Computer\Types\Computer;
use PhpDesignPattern\Builder\Computer\Ups;



abstract class Builder
{
    protected Computer $computer;

    /**
     * Summary of buildMotherboard
     * @return Motherboard
     */
    abstract protected function buildMotherboard():Motherboard;

    /**
     * Summary of buildKeyboard
     * @return Keyboard
     */
    abstract protected function buildKeyboard():Keyboard;

    /**
     * Summary of buildMouse
     * @return Mouse
     */
    abstract protected function buildMouse():Mouse;

    /**
     * Summary of buildMonitor
     * @return Monitor
     */
    abstract protected function buildMonitor():Monitor;

    /**
     * Summary of buildCoolingSystem
     * @return CoolingSystem
     */
    abstract protected function buildCoolingSystem():CoolingSystem;

    /**
     * Summary of buildUps
     * @return Ups
     */
    abstract protected function buildUps():Ups;

    /**
     * Summary of buildComputer
     * @return Computer
     */
    abstract public function buildComputer():Computer;
}