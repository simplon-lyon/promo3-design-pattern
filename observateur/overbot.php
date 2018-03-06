<?php

namespace observateur;

use observateur\Subject;
use observateur\Observer;


class Overbot implements Subject {
    private $observers = [];
    private $temperature = 50;
    private $battery = 100;
    private $rage = 50;


    public function addObserver(Observer $obs) {
        $this->observers[] = $obs;
    }

    public function removeObserver(Observer $obs) {
        if(($key = array_search($obs, $this->observers, true)) !== FALSE) {
            unset($this->observers[$key]);
        }
    }
    
    public function notifyObserver() {
        foreach($this->observers as $observer) {
            $observer->update($this->temperature, $this->battery, $this->rage);
        }
    }

    public function enslaveMankind() {
        echo '<p>Now Enslaving mankind bip boop</p>';
        $this->rage -= 20;
        $this->battery -= 20;
        $this->temperature += 10;

        $this->notifyObserver();
    }

    public function recharge() {
        echo '<p>Now Recharging bloop</p>';
        $this->battery += 20;
        $this->temperature += 10;

        $this->notifyObserver();
    }
}