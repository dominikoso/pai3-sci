<?php

namespace App;

class CSVWriter {

    function writeFile($list){
        
        $fp = fopen(Config::PATH_TO_CSV_FILE, 'a');
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        
        fclose($fp);
    }
        
        
}

