<?php

function myLoader($className) {
    $class = str_replace('\\', '/', $className);
    $class = strtolower($class);
    require($class . '.php');
}

spl_autoload_register('myLoader');


use decorateur\Coffee;
use decorateur\topping\Cinnamon;
use decorateur\topping\WhippedCream;
use decorateur\Chocolate;

$coffee = new Coffee();
echo $coffee->getDesc();
echo $coffee->getPrice();
echo '<br/>';
$coffeeCinnamon = new Cinnamon($coffee);
echo $coffeeCinnamon->getDesc();
echo $coffeeCinnamon->getPrice();
echo '<br/>';
$coffeeCinnamonCream = new WhippedCream($coffeeCinnamon);
echo $coffeeCinnamonCream->getDesc();
echo $coffeeCinnamonCream->getPrice();
echo '<br/>';
