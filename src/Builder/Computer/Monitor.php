<?php
namespace PhpDesignPattern\Builder\Computer;

class Monitor
{
    /**
     * Summary of 
     * @var string $resolution
     */
    private string $resolution;

    /**
     * Summary of __construct
     * @param string $resolution
     */
    public function __construct(string $resolution)
    {
        $this->resolution = $resolution;
    }
	/**
	 * Summary of
	 * @return string
	 */
	function getResolution(): string 
    {
		return $this->resolution;
	}
}