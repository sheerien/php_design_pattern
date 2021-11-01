<?php
namespace PhpDesignPattern\Builder;

use PhpDesignPattern\Builder\Builder;
use PhpDesignPattern\Builder\Computer\Types\Computer;

class Director
{
    private Builder $builder;

		/**
	 * @param $builder
	 */
	public function __construct(Builder $builder) {
		$this->builder = $builder;
	}
	
	/**
	 * Summary of changeBuilder
	 * @param Builder $builder
	 * @return void
	 */
	public function changeBuilder(Builder $builder)
	{
		$this->builder = $builder;
	}

	/**
	 * Summary of makeComputer
	 * @return Computer
	 */
	public function makeComputer():Computer
	{
		return $this->builder->buildComputer();
	}

}