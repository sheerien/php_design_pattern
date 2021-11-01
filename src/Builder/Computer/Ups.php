<?php
namespace PhpDesignPattern\Builder\Computer;

class Ups
{
    /**
     * Summary of 
     * @var int $duration
     */
    private int $duration;

    /**
     * Summary of __construct
     * @param int $duration
     */
    public function __construct(int $duration)
    {
        $this->duration = $duration;
    }
    
	/**
	 * Summary of
	 * @return int
	 */
	function getDuration(): int 
    {
		return $this->duration;
	}
}