<?php

namespace strategie;

use strategie\comportement\ActionCuisine;
use strategie\comportement\CommunicationVocale;


class RobotCuistot extends Robot {

    function __construct() {
        parent::__construct(new ActionCuisine(), 
                new CommunicationVocale());
    }
    
}