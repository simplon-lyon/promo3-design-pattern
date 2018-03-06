<?php

namespace decorateur\logger;

use strategie\Robot;

abstract class Logger extends Robot {
    protected $robot;

    public function __construct(Robot $robot) {
        $this->robot = $robot;
    }

}