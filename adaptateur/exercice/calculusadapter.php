<?php

namespace adaptateur\exercice;

use adaptateur\exercice\Calculus;
use adaptateur\exercice\OldCalculus;

class CalculusAdapter implements Calculus {
    private $oldCalculus;

    public function __construct(OldCalculus $oldCalculus) {
        $this->oldCalculus = $oldCalculus;
    }


    public function operation($a, $b, string $operator){
        switch ($operator) {
            case '+':
                return $this->oldCalculus->add($a,$b);
                break;
            case '-':
                return $this->oldCalculus->substract($a,$b);
                break;
            case '*':
                return $this->oldCalculus->multiply($a,$b);
                break;
            case '/':
                return $this->oldCalculus->divide($a,$b);
                break;
            default:
                return 0;
                break;
        }
    }
}