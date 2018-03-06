<?php

namespace decorateur;

use decorateur\Drink;

class Chocolate implements Drink{

    
    public function getPrice():float{
        return 4.0;
    }
    public function getDesc():string{
        return 'a good hot cocoa';
    }
}