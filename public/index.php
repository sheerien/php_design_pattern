<?php

use PhpDesignPattern\Builder\Director;
use PhpDesignPattern\Abstraction\Model;
use PhpDesignPattern\Abstraction\PDODB;
use PhpDesignPattern\Abstraction\SQLIDB;
use PhpDesignPattern\factory\DbTypes\PdoType;
use PhpDesignPattern\factory\DbTypes\SqliType;
use PhpDesignPattern\Builder\Computer\Builders\ComputerCsBuilder;


require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/Abstraction/Config.php";

// $model = new Model();
// $pdo = new PDODB();
// $sqli = new SQLIDB();

// // var_dump($model->obg($pdo));
// var_dump($model->obg($sqli));

// ======================================
// $pdo = new PdoType();
// $sqli = new SqliType();

// // var_dump($pdo->useDB());
// var_dump($sqli->useDB());

//==========================================

//Builder
$director = new Director(new ComputerCsBuilder);

$computer = $director->makeComputer();

var_dump($computer);