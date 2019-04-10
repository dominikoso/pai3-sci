<?php 

    require_once('classes.php');

    class Image {

        public function drawHandle($points = null)
        {
            if ($points == null) {$points = array($p1 = new Odcinek());}
            $handle = ImageCreate (200, 200) or die ("Cannot Create image");
            $bg_color = ImageColorAllocate ($handle, 0, 0, 0);
            $txt_color = ImageColorAllocate ($handle, 255, 255, 255);
            foreach ($points as $point){
                $point->drawLIne($handle);
            }
            //header( "Content-type: image/png" );
            //imagepng($handle);
            $save = "tmp/img.png";
            imagepng($handle, $save, 0, NULL);
            imagedestroy($handle);
        }
        //ImageString ($handle, 100, 0, 130, "|AB|: ".$p1->liczDlugosc(), $txt_color);
        //ImageString ($handle, 100, 0, 150, "A: ".$p1->getX1()." ".$p1->getY1(), $txt_color);
        //ImageString ($handle, 100, 0, 170, "B: ".$p1->getX2()." ".$p1->getY2(), $txt_color);
    }