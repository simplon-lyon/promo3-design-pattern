<?php

namespace strategie;

use strategie\comportement\ActionMenage;
use strategie\comportement\CommunicationLED;


class Roomba extends Robot {

    function __construct() {
        parent::__construct(new ActionMenage(), 
                new CommunicationLED());
    }
    
}