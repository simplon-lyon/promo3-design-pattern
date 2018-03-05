<?php

namespace strategie\exercice;

use strategie\Robot;
use strategie\exercice\authorizations\CleanAllowed;

class LivingRoom extends Room {
    
    public function __construct(){
        parent::__construct(new CleanAllowed());
    }

}