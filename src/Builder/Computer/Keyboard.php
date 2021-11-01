<?php
namespace PhpDesignPattern\Builder\Computer;

class Keyboard
{

    /**
     * Summary of 
     * @var bool $utfSupport
     */
    private bool $utfSupport;

    /**
     * Summary of __construct
     * @param bool $utfSupport
     */
    public function __construct(bool $utfSupport)
    {
        $this->utfSupport = $utfSupport;
    }

    
	/**
	 * Summary of
	 * @return bool
	 */
	function getUtfSupport(): bool 
    {
		return $this->utfSupport;
	}
}