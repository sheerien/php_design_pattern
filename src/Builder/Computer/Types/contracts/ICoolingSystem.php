<?php
namespace PhpDesignPattern\Builder\Computer\Types\contracts;

interface ICoolingSystem
{
    /**
     * Summary of coolDown
     * @param int $temp
     * @return bool
     */
    public function coolDown(int $temp):bool;
}