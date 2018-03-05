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
use strategie\exercice\LivingRoom;
use strategie\exercice\Kitchen;

$menager = new RobotMenager();
$cuistot = new RobotCuistot();
$roomba = new Roomba();

$menager->actionner();
$menager->communiquer();
$cuistot->actionner();
$cuistot->communiquer();
$roomba->actionner();
$roomba->communiquer();


$kitchen = new Kitchen();
$livingRoom = new LivingRoom();

$kitchen->open($menager);
$kitchen->open($cuistot);
$kitchen->open($roomba);


$livingRoom->open($menager);
$livingRoom->open($cuistot);
$livingRoom->open($roomba);