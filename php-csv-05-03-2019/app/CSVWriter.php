<?php

namespace App;

class CSVWriter {

    function writeFile($output, $json){

        $f = fopen($output, 'w');
        $array = json_decode($json, true);
        fputcsv($f, $array);
        fclose($f);
        
    }

}