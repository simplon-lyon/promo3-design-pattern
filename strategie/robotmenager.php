<?php

namespace strategie;

use strategie\comportement\ActionMenage;
use strategie\comportement\CommunicationVocale;
use observateur\Observer;

class RobotMenager extends Robot implements Observer {

    function __construct() {
        parent::__construct(new ActionMenage(), 
                new CommunicationVocale());
    }

    public function update(int $temp, int $battery, int $rage) {
        if($temp > 70) {
            echo '<p>throw water bucket on overbot</p>';
        }
    }
    
}