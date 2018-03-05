<?php

namespace strategie\exercice;

use strategie\Robot;
use strategie\exercice\authorizations\Authorization;

abstract class Room {

    private $authorization;
    
    public function __construct(Authorization $authorization){
        $this->authorization=$authorization;
    }

    public function open (Robot $robot){
        if ($this->authorization->allowed($robot)){
            echo 'room\'s opening';
        } else {
            echo 'room closed';
        }
    }
}