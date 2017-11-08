<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');

use strategie\RobotMenager;
use strategie\RobotCuistot;
use strategie\Roomba;

$menager = new RobotMenager();
$cuistot = new RobotCuistot();
$roomba = new Roomba();

$menager->actionner();
$menager->communiquer();
$cuistot->actionner();
$cuistot->communiquer();
$roomba->actionner();
$roomba->communiquer();