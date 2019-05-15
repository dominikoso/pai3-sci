<?php
    class Trojkat {
        
        private $a;
        private $h;

        /**
         * Class constructor.
         */
        public function __construct( $a = null, $h = null ){
     
            $this->a = ($a != null && is_int($a) && $a <= 100 && $a >= 1) ? $a : random_int(1, 100);
            $this->h = ($h != null && is_int($h) && $h <= 100 && $h >= 1) ? $h : random_int(1, 100);
        }

        public function liczPole(){
           
            return ($this->a * $this->h);            

        }


        public function getInfo(){

            return "a = ".$this->a." h= ".$this->h." P = ".$this->liczPole();
        }

        public function getA(){
            return $this->a;
        }

        public function getH(){
            return $this->h;
        }

    }