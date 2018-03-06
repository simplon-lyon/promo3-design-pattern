<?php

namespace decorateur\topping;

use decorateur\Drink;

abstract class Topping implements Drink{
    protected $drink;

    public function __construct(Drink $drink) {
        $this->drink = $drink;
    }
    
    
}