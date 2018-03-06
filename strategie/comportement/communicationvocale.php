<?php

namespace strategie\comportement;

use strategie\comportement\Communication;

class CommunicationVocale implements Communication {

    public function doCommunication():string {
        //place de l'imagination
        return "ce qu'il fait beau aujourd'hui<br\>";
    }

}