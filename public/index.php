<?php

use PhpDesignPattern\Builder\Director;
use PhpDesignPattern\Abstraction\Model;
use PhpDesignPattern\Abstraction\PDODB;
use PhpDesignPattern\Abstraction\SQLIDB;
use PhpDesignPattern\factory\DbTypes\PdoType;
use PhpDesignPattern\factory\DbTypes\SqliType;
use PhpDesignPattern\Builder\Computer\Builders\ComputerCsBuilder;
use PhpDesignPattern\Builder\Computer\Builders\ComputerXlBuilder;
use PhpDesignPattern\Prototype\Employee\EmployeePrototype;
use PhpDesignPattern\Prototype\Employee\ProfileData;
use PhpDesignPattern\Prototype\Employee\Address;
use PhpDesignPattern\Prototype\Employee\Privileges\Privileges;
use PhpDesignPattern\Prototype\Employee\Privileges\Types\WebTypePrivilege;
use PhpDesignPattern\Prototype\Employee\Salary;
use PhpDesignPattern\Prototype\Employee\Privileges\Types\NetworkTypePrivilege;
use PhpDesignPattern\Prototype\Employee\Privileges\Types\ServerRoomTypePrivilege;

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

// //Builder
// $director = new Director(new ComputerCsBuilder);

// $computer = $director->makeComputer();

// // var_dump($computer);

// $director->changeBuilder(new ComputerXlBuilder);
// $computer = $director->makeComputer();
// var_dump($computer);

//===================================================
// Prototype

$emp = new EmployeePrototype(
            new ProfileData("Sherien Bassem", 41, 
            new Address(85.34, 58.23, "Alothman Street", "Hawally", "Kuwait", 28, 30000),
            "22345278", "66807766", "masrawy"
        ),
        new Salary(2000.50, 2.5, 4563896967),
        new Privileges(
            [
                new WebTypePrivilege(),
                new NetworkTypePrivilege()
            ]
        )
    );

$emp->getPrivileges()->addPrivilege(new ServerRoomTypePrivilege());
var_dump($emp);

$empp = clone ($emp);
var_dump($empp);