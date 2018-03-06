<?php

namespace decorateur\logger;

use strategie\Robot;
use decorateur\logger\Logger;

class FileLogger extends Logger {
    
    public function __construct(Robot $robot) {
        parent::__construct($robot);
    }

    public function actionner() {
        $log = fopen('log.txt', 'a');
        fwrite($log, "LOG : START Robot actionner()\n");
        $this->robot->actionner();
        fwrite($log, "LOG : END Robot actionner()\n");
        
        fclose($log);
    }

    public function communiquer() {
        $log = fopen('log.txt', 'a');
        fwrite($log, "LOG : START Robot communiquer()\n");
        $this->robot->communiquer();
        fwrite($log, "LOG : END Robot communiquer()\n");
        
        fclose($log);
        
    }

}