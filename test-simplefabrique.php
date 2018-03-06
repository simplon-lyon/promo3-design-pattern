<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');


use simplefabrique\RobotFactory;

$robot = RobotFactory::createRobot(1);

$robot->actionner();