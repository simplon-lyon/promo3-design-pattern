<?php

namespace strategie;

use strategie\comportement\ActionMenage;
use strategie\comportement\CommunicationLED;
use observateur\Observer;

class Roomba extends Robot implements Observer {

    function __construct() {
        parent::__construct(new ActionMenage(), 
                new CommunicationLED());
    }


    public function update(int $temp, int $battery, int $rage) {
        if($rage > 80) {
            echo '<p>becoming Doomba</p>';
        }
    }
    
}