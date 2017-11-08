<?php

namespace strategie;

use strategie\comportement\ActionMenage;
use strategie\comportement\CommunicationVocale;


class RobotMenager extends Robot {

    function __construct() {
        parent::__construct(new ActionMenage(), 
                new CommunicationVocale());
    }
    
}