<?php
    class Odcinek {
        
        private $x1;
        private $y1;
        private $x2;
        private $y2;

        /**
         * Class constructor.
         */
        public function __construct( $x1=null, $y1=null, $x2=null, $y2=null )
        { 
            $this->x1 = ($x1 != null && is_int($x1)) ? $x1 : random_int(-100, 100);
            $this->x2 = ($x2 != null && is_int($x2)) ? $x2 : random_int(-100, 100);
            $this->y1 = ($y1 != null && is_int($y1)) ? $y1 : random_int(-100, 100);
            $this->y2 = ($y2 != null && is_int($y2)) ? $y2 : random_int(-100, 100);
        }

        function liczDlugosc()
        {
            $x = ( pow($this->x2-$this->x1, 2));
            $y = ( pow($this->y2-$this->y1, 2));
            if ($this->x1 == $this->x2 && $this->y1 == $this->y2){ return 0; }
            else{ return $distance = ( sqrt($x + $y) ); }

        }

        public function getX1 () {
            return $this->x1;
        }

        public function getX2 () {
            return $this->x2;
        }

        public function getY1 () {
            return $this->y1;
        }

        public function getY2 () {
            return $this->y2;
        }

    
        
    }