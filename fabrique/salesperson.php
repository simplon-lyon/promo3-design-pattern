<?php

namespace fabrique;

use strategie\Robot;

abstract class SalesPerson {

    abstract protected function createRobot():Robot;

    public function show() {
        $robot = $this->createRobot();
        echo $robot;
        echo '<br/>';
        echo $robot->actionner();
        echo '<br/>';
        echo $robot->communiquer();
        echo '<br/>';
        

    }
}