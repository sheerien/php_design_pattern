<?php
namespace PhpDesignPattern\Prototype\Employee\Privileges\Types;

class ServerRoomTypePrivilege implements PrivilegeInterface
{

	/**
	 *
	 * @return bool
	 */
	public function enable(): bool 
    {
        return true;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function disable(): bool 
    {
        return true;
	}
}