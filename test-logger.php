<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');


use strategie\RobotMenager;
use decorateur\logger\EchoLogger;
use decorateur\logger\FileLogger;


$echoRobot = new EchoLogger(new RobotMenager());
$echoRobot->actionner();


$spiedRobot = new FileLogger($echoRobot);
$spiedRobot->communiquer();