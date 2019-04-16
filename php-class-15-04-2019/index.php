<?php

require_once("Trojkat.class.php");

$trojkaty = array($p1 = new Trojkat(), $p2 = new Trojkat(), $p3 = new Trojkat());

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
    <?php
            foreach ($trojkaty as $trojkat){
                echo $trojkat->getInfo()."<br>";
            }
    ?>
</body>
</html>
