<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');

use strategie\RobotMenager;

use strategie\Roomba;
use observateur\Overbot;

$overbot = new Overbot();

$roomba = new Roomba();
$robotMenager = new RobotMenager();

$overbot->addObserver($roomba);
$overbot->addObserver($robotMenager);

$overbot->enslaveMankind();
$overbot->enslaveMankind();
$overbot->recharge();
