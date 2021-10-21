<?php

use PhpDesignPattern\Abstraction\Model;
use PhpDesignPattern\Abstraction\PDODB;
use PhpDesignPattern\Abstraction\SQLIDB;

require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../src/Abstraction/Config.php";

$model = new Model();
$pdo = new PDODB();
$sqli = new SQLIDB();
var_dump($model->obg($sqli));
// var_dump($model->obg($pdo));