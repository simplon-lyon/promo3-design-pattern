<?php

namespace strategie;

use strategie\comportement\Action;
use strategie\comportement\Communication;

abstract class Robot {
    private $action;
    private $communication;

    public function __construct(Action $action, 
                        Communication $communication) {
       $this->action = $action;
       $this->communication = $communication;
    }

    public function actionner() {
        $this->action->doAction();
    }

    public function communiquer() {
       echo $this->communication->doCommunication();
    }

    public function __toString() {
        return "Robot dernier cri";
    }
}