<?php

namespace fabrique;

use strategie\Robot;
use strategie\RobotMenager;
use fabrique\SalesPerson;


class SalesHonnest extends SalesPerson {

    protected function createRobot():Robot {
        return new RobotMenager();
    }

}