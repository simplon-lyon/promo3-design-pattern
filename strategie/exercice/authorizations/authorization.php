<?php 
namespace strategie\exercice\authorizations;

use strategie\Robot;

interface Authorization{
    public function allowed(Robot $robot):bool;
}