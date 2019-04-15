<style>

.form-popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 2px dotted black;
  z-index: 9;
}


</style>
<script>
    
  
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
  
}

</script>
<button class="btn btn-primary" onclick="openForm()">Add New</button>
<?php
    require 'vendor/autoload.php';

    use App\CSVReader;

    $csv = (new CSVReader())->readFile();
    echo $csv->toTable();

    require_once('table.html');


