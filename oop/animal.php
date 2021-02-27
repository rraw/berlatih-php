<?php
    class Animal{
        public $name;
        public $legs = 2;
        public $cold_blooded = "FALSE";

        public function __construct($string){
            $this -> name = $string;
        }
    }
?>