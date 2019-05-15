<?php
    class RownanieKwadratowe {
        private $a;
        private $b;
        private $c;

        public function __construct($a = 0, $b = 0, $c = 0)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }

        public function liczDelta($a = null, $b = null, $c = null){
            $a = ($a != null ? $a : $this->a);
            $b = ($b != null ? $b : $this->b);
            $c = ($c != null ? $c : $this->c);
            $tmp = (pow($b, 2) - (4*$a*$c));
           
            return $tmp;
        }

        public function liczRownanie($a = null, $b = null, $c = null){
            $a = ($a != null ? $a : $this->a);
            $b = ($b != null ? $b : $this->b);
            $c = ($c != null ? $c : $this->c);
            if ($a == 0) {return "To nie jest funkcja kwadratowa";}
            $delta = $this->liczDelta($a, $b, $c);
            if ($delta < 0){
                return false;
            }else if ($delta == 0) {
                echo "Jedno miejsce zerowe: ";
                $x = (($b)*(-1)/($a*2));
                return $x;
            }else if ($delta > 0){
                echo "Dwa miejsca zerowe: ";
                $x1 = (($b*(-1)+sqrt($delta))/($a*2));
                $x2 = (($b*(-1)-sqrt($delta))/($a*2));
                return [$x1, $x2];
            }
        }


        public function getA(){
            return $this->a;
        }

        public function getB(){
            return $this->b;
        }

        public function getC(){
            return $this->c;
        }

    }

?>