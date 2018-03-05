<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');


use singleton\Singleton;

$inst1 = Singleton::getInstance();
$inst2 = Singleton::getInstance();
