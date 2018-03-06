<?php

namespace adaptateur;

use strategie\Robot;

class Piece {

    public function ouvrirPorte(Robot $robot) {
        $robot->communiquer();
        echo "ouvre la porte au robot";
    }
}