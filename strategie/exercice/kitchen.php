<?php

namespace strategie\exercice;

use strategie\Robot;
use strategie\exercice\authorizations\AllAllowed;

class Kitchen extends Room {
    
    public function __construct(){
        parent::__construct(new AllAllowed());
    }

}