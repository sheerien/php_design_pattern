<?php
namespace PhpDesignPattern\Prototype\Employee\Privileges\Types;

interface PrivilegeInterface
{
    public function enable():bool;
    public function disable():bool;
}