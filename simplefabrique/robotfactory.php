<?php

namespace simplefabrique;

use strategie\Robot;
use strategie\RobotMenager;
use strategie\RobotCuistot;
use strategie\Roomba;


class RobotFactory {

    public static function createRobot(int $type):Robot {
        switch($type) {
            case 1:
                return new RobotMenager();
            case 2:
                return new RobotCuistot();
            case 3:
                return new Roomba();
            
        }
    }

}