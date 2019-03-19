<?php

namespace App;

class JSONReader {
    
    private $json;

    public function readFile() {
        if ($this->json == null) {
            $this->json = file_get_contents(Config::PATH_TO_JSON_FILE);
        }
        return $this->json;
    }

}