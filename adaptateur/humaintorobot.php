<?php

namespace adaptateur;
use strategie\Robot;

class HumainToRobot extends Robot {
    private $humain;

    public function __construct(Humain $humain) {
        $this->humain = $humain;
    }

    public function actionner() {
        $this->humain->allerSurYoutube();
    }

    public function communiquer() {
        echo $this->humain->raconterSaVie()." ".
        $this->humain->sePlainDeSonTravail();
    }
}