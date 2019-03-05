<?php

require 'vendor/autoload.php';

use App\CSVReader;

/* 
    https://github.com/johnnyfreeman/coseva 
    composer install
    composer dump-autoload -o
*/

$csv = (new CSVReader())->readFile();

if($csv != null){
    $csv->filter(function($columns) {
	    unset($columns[0]);
	    return $columns;
    });

    echo $csv->toTable();

}else{
    echo 'Something goes worng';    
}