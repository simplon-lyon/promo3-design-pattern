<?php

namespace observateur;
use observateur\Observer;

interface Subject {

    public function addObserver(Observer $obs);
    public function removeObserver(Observer $obs);
    public function notifyObserver();
    
}