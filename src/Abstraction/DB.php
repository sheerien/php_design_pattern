<?php
namespace PhpDesignPattern\Abstraction;

abstract class DB
{

    abstract public function dbConnect();
    abstract public function select(string $table, string $column = '*');
    abstract public function where(string $column, string $compar, string|int $value);
    abstract public function and(string $column, string $compar, string|int $value);
    abstract public function or(string $column, string $compar, string|int $value);
}