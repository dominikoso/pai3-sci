<?php header ("Content-type: image/png");
    include ('Odcinek.class.php');
    $p1 = new Odcinek();
    $handle = ImageCreate (200, 200) or die ("Cannot Create image");
    $bg_color = ImageColorAllocate ($handle, 0, 0, 0);
    $line_color = ImageColorAllocate ($handle, 255, 255, 255);
    $txt_color = ImageColorAllocate ($handle, 255, 255, 255);

    ImageLine($handle, $p1->getX1()+100, $p1->getY1()+100, $p1->getX2()+100, $p1->getY2()+100, $line_color);
    ImageString ($handle, 100, 0, 130, "|AB|: ".$p1->liczDlugosc(), $txt_color);
    ImageString ($handle, 100, 0, 150, "A: ".$p1->getX1()." ".$p1->getY1(), $txt_color);
    ImageString ($handle, 100, 0, 170, "B: ".$p1->getX2()." ".$p1->getY2(), $txt_color);
    ImagePng ($handle);