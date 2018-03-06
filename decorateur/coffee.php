<?php

namespace decorateur;

use decorateur\Drink;

class Coffee implements Drink{

    
    public function getPrice():float{
        return 2.0;
    }
    public function getDesc():string{
        return 'a strong espresso';
    }
}