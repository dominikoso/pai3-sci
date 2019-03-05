<?php

namespace App;

use Coseva\CSV as readCSV;

class CSVReader {

    private $csv;

    public function readFile() {
        if ($this->csv == null) {
            $this->csv = new readCSV(Config::PATH_TO_CSV_FILE);
        }
        return $this->csv;
    }

}