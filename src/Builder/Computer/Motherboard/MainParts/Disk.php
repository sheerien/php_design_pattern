<?php
namespace PhpDesignPattern\Builder\Computer\Motherboard\MainParts;

class Disk
{
    /**
     * Summary of 
     * @var string $type
     */
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

	/**
	 * Summary of
	 * @return string
	 */
	function getType(): string 
    {
		return $this->type;
	}
}