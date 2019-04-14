<?php

use App\CSVWriter;

if(isset($_POST['class'])) $class = $_POST['class'];
if(isset($_POST['topic'])) $topic = $_POST['topic'];
if(isset($_POST['date'])) $date = $_POST['date'];
if(isset($_POST['term'])) $term = $_POST['term'];
if(isset($_POST['level'])) $level = $_POST['level'];
$list = array (
    array($class, $topic, $date, $term, $level)
);

$writer = new CSVWriter();

$writer->writeFile($list);