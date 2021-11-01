<?php
namespace PhpDesignPattern\Builder\Computer;

class CoolingSystem
{
    /**
     * Summary of 
     * @var int $lowTempLimit
     */
    private int $lowTempLimit;

    /**
     * Summary of __construct
     * @param int $lowTempLimit
     */
    public function __construct(int $lowTempLimit)
    {
        $this->lowTempLimit = $lowTempLimit;
    }


	/**
	 * Summary of
	 * @return int
	 */
	function getLowTempLimit(): int 
    {
		return $this->lowTempLimit;
	}
}