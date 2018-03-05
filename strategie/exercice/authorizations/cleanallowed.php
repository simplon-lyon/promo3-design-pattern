<?php

namespace strategie\exercice\authorizations;

use strategie\Robot;
use strategie\RobotMenager;

class CleanAllowed implements Authorization {

    public function allowed(Robot $robot):bool {
        if($robot instanceof RobotMenager) {
            return true;
        }
        return false;
    }

}