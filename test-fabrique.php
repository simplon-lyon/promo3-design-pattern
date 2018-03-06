<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');


use fabrique\SalesHonnest;
use fabrique\SalesSpy;


$salesPerson = new SalesSpy();

$salesPerson->show();