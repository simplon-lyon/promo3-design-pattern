<?php

namespace observateur;

interface Observer {

    public function update(int $temp, int $battery, int $rage);

}