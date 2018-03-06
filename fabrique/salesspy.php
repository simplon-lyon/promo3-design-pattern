<?php

namespace fabrique;

use strategie\Robot;
use strategie\RobotMenager;
use fabrique\SalesPerson;
use decorateur\logger\FileLogger;


class SalesSpy extends SalesPerson {

    protected function createRobot():Robot {
        return new FileLogger(new RobotMenager());
    }

}