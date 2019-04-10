<?php

require_once("Image.class.php");
require_once("classes.php");

$points = array($p1 = new Odcinek(), $p2 = new Odcinek(), $p3 = new Odcinek());

$imgFactory = new Image;
$imgFactory->drawHandle($points);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="text-align: center">
    <img src="tmp/img.png"><br>
    <?php
        if ($points == null) {
            echo "Points randomized, cannot specify data";
        } else {
            foreach ($points as $point){
                echo $point->generateDesc()."<br>";
            }
        }
    ?>
</body>
</html>
