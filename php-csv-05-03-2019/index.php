<?php

require 'vendor/autoload.php';

use App\CSVReader;

/* https://github.com/johnnyfreeman/coseva */

$csv = (new CSVReader())->readFile();

if($csv != null)
    echo 'File Read succesfully';
else
    echo 'Something goes worng';    