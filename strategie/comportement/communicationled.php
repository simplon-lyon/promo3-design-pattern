<?php

namespace strategie\comportement;

use strategie\comportement\Communication;

class CommunicationLED implements Communication {

    public function doCommunication():string {
        //place de l'imagination
        return "clignote sauvagement<br\>";
    }

}