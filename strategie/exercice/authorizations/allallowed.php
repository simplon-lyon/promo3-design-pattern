<?php

namespace strategie\exercice\authorizations;

use strategie\Robot;

class AllAllowed implements Authorization {

    public function allowed(Robot $robot):bool {
        return true;
    }

}