<?php
require 'class/RownanieKwadratowe.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://unpkg.com/d3@3/d3.min.js"></script>
    <script src="https://unpkg.com/function-plot@1/dist/function-plot.js"></script>
</head>
<body>
<?php

    $a = rand(-100, 100);
    $b = rand(-100, 100);
    $c = rand(-100, 100);
    $tmp = new RownanieKwadratowe($a, $b, $c);
    echo $tmp -> liczDelta();
    echo "<br>";
    var_dump($tmp -> liczRownanie());

?>
<div id="root"></div>
<script>
    functionPlot({
        title: 'y=<?php echo $tmp->getA() ?>x^2+<?php echo $tmp->getB() ?>x+<?php echo $tmp->getC() ?>',
        target: '#root',
        width: 580,
        height: 400,
        disableZoom: false,
        xAxis: {
            label: 'x - axis',
            domain: [-100, 100]
        },
        yAxis: {
            label: 'y - axis'
        },
        data: [{
            fn: '<?php echo $tmp->getA() ?>x^2+<?php echo $tmp->getB() ?>x+<?php echo $tmp->getC() ?>'
        }]
    })
</script>
</body>
</html>
