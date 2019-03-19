<?php

require 'vendor/autoload.php';

use App\CSVReader;
use App\CSVWriter;
use App\ICSReader;
use App\JSONReader;

/* 
    https://github.com/johnnyfreeman/coseva 
    composer install
    composer dump-autoload -o
*/

echo '<br>=========================================== CSV =====================================================<br>';

$csv = (new CSVReader())->readFile();

if($csv != null){
    $csv->filter(function($columns) {
	    unset($columns[0]);
	    return $columns;
    });

    echo $csv;

}else{
    echo 'Something goes worng with CSV';    
}



echo '<br>=========================================== JSON =====================================================<br>';

$json = (new JSONReader())->readFile();

if($json != null){

    echo $json;
    (new CSVWriter())->writeFile('csv/json2csv.csv', $json);

}else{
    echo 'Something goes worng with JSON';    
}



