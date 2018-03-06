<?php
namespace decorateur\topping;

use decorateur\Drink;
use decorateur\topping\Topping;

class Cinnamon extends Topping {
    

    public function __construct(Drink $drink) {
        parent::__construct($drink);
    }


    public function getPrice():float {
        return $this->drink->getPrice() + 0.5;
    }

    public function getDesc():string {
        return $this->drink->getDesc() . ' with cinnamon';
    }
    
    
}