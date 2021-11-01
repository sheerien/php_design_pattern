<?php
namespace PhpDesignPattern\Builder\Computer;

class Mouse
{
    /**
     * Summary of 
     * @var bool $withExtraUtilities
     */
    private bool $withExtraUtilities;

    /**
     * Summary of __construct
     * @param bool $withExtraUtilities
     */
    public function __construct(bool $withExtraUtilities)
    {
        $this->withExtraUtilities = $withExtraUtilities;
    }
    
	/**
	 * Summary of
	 * @return bool
	 */
	function getWithExtraUtilities(): bool 
    {
		return $this->withExtraUtilities;
	}
}