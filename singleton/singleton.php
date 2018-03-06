<?php
namespace singleton;

class Singleton {
    private static $instance;

    private function __construct() {
        echo '<p>construct du singleton</p>';
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function __clone() {
        return null;
    }
}