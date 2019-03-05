<?php

namespace App;

class CSVReader {

    private $csv;

    public function readFile() {
        if ($this->csv == null) {
            $this->csv = new CSV(Config::PATH_TO_CSV_FILE);
        }
        return $this->csv;
    }

}