<?php

    use App\CSVReader;

    $csv = (new CSVReader())->readFile();
    $csv->toTable();
