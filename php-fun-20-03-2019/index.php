<?php

function f2($dzielna, $dzielnik=1){
    return $dzielna/$dzielnik;
}

function f4($num) {
    $sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
  $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }
  return $sum;
}

function f6($arg) {
    $t = '';
    $t.= '<table border="1">';

    for ($x = 0; $x < $arg; $x++){
        $t.='<tr>';
        for ($y=0; $y < $arg; $y++){
            $t.='<td>Odwrócony Negatyw Wielkiej Litery B</td>';
        }
        $t.= "</tr>";
    }

    $t.= '</table>';

    return $t;

}
function f1($arg=0){
    if(!is_numeric($arg)) return false;
    if($arg % 7 == 0){
        return true;
    }
    return false;
}

function f3($arg=''){
    return strlen($arg)*2;
}

function f5($arg=''){
    return substr_count($arg, ' ');
}

function f7($w=3, $c=3){
    if($w<3) $w = 3;
    if($c<3) $c = 3;

    $t = '<table border="1">';

    for($i=1; $i <= $w; $i++){
        $t .= '<tr>';
        for($j=1; $j <= $c; $j++){
            $t .= '<td>';
            $t .= $i.' '.$j;
            $t .= '</td>';
        }
        $t .= '</tr>';
    }

    $t .= '</table>';

    return $t;
}

echo "1: ";echo f1(14); echo "<br>";
echo "2: ";echo f2(10, 2); echo "<br>";
echo "2: ";echo f2(10); echo "<br>";
echo "3: ";echo f3('fasfsaffsafsa'); echo "<br>";
echo "4: ";echo f4(12345); echo "<br>";
echo "5: ";echo f5('Ala ma kota'); echo "<br>";
echo "6: ";echo f6(4); echo "<br>";
echo "7: ";echo f7(5, 4); echo "<br>";