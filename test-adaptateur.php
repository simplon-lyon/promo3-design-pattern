<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');

use adaptateur\Humain;
use adaptateur\HumainToRobot;
use adaptateur\Piece;

//Notre pièce attend un Robot pour ouvrir la porte
$piece = new Piece();
//Nous avons un humain qui veut utiliser la piece
$humain = new Humain("henri", " ");
//On adapte donc l'humain en robot avec l'adaptateur
$adaptateur = new HumainToRobot($humain);
//Qui peut du coup ouvrir la porte de la pièce
$piece->ouvrirPorte($adaptateur);