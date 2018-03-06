<?php
namespace decorateur\topping;

use decorateur\Drink;
use decorateur\topping\Topping;

class WhippedCream extends Topping {
    

    public function __construct(Drink $drink) {
        parent::__construct($drink);
    }


    public function getPrice():float {
        return $this->drink->getPrice() + 1.0;
    }

    public function getDesc():string{
        return $this->drink->getDesc() . ' with homemade whipped cream';
    }
    
    
}