<?php
namespace PhpDesignPattern\Prototype\Employee\Privileges;
use PhpDesignPattern\Prototype\Employee\Privileges\Types\PrivilegeInterface;

class Privileges
{
    private array $privileges;
    
	/**
	 * @param $privileges array 
	 */
	public function __construct(array $privileges) 
    {
        $this->privileges = $privileges;
	}

    public function addPrivilege(PrivilegeInterface $privilege)
    {
        array_push($this->privileges, $privilege);
    }

    public function clearPrivileges()
    {
        $this->privileges = [];
    }
}