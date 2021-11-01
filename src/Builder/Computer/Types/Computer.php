<?php
namespace PhpDesignPattern\Builder\Computer\Types;

use PhpDesignPattern\Builder\Computer\Mouse;
use PhpDesignPattern\Builder\Computer\Monitor;
use PhpDesignPattern\Builder\Computer\Keyboard;
use PhpDesignPattern\Builder\Computer\Motherboard\Motherboard;



abstract class Computer
{
    protected Motherboard $motherboard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    /**
     * Summary of turnOn
     * @return bool
     */
    abstract public function turnOn():bool;

    /**
     * Summary of turnOff
     * @return bool
     */
    abstract public function turnOff():bool;

    /**
     * Summary of dashboard
     * @return string
     */
    public function dashboard():string
    {
        return " ";
    }

    /**
     * Set the value of motherboard
     *
     * @return  self
     */ 
    public function setMotherboard($motherboard)
    {
        $this->motherboard = $motherboard;

        return $this;
    }

    /**
     * Set the value of keyboard
     *
     * @return  self
     */ 
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;

        return $this;
    }

    /**
     * Set the value of mouse
     *
     * @return  self
     */ 
    public function setMouse($mouse)
    {
        $this->mouse = $mouse;

        return $this;
    }

    /**
     * Set the value of monitor
     *
     * @return  self
     */ 
    public function setMonitor($monitor)
    {
        $this->monitor = $monitor;

        return $this;
    }
}