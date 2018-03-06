<?php

namespace decorateur\logger;

use strategie\Robot;
use decorateur\logger\Logger;

class EchoLogger extends Logger {
    
    public function __construct(Robot $robot) {
        parent::__construct($robot);
    }

    public function actionner() {
        echo '<p>LOG : START Robot actionner()</p>';
        $this->robot->actionner();
        echo '<p>LOG : END Robot actionner()</p>';
        
    }

    public function communiquer() {
        echo '<p>LOG : START Robot communiquer()</p>';
        $this->robot->communiquer();
        echo '<p>LOG : END Robot communiquer()</p>';
        
    }

}