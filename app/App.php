<?php
// declare(strict_types = 1);
require('helper.php');


$file =fopen("../transaction_files/sample_1.csv", "r");
fgetcsv($file);
$transaction=[];
while(($line= fgetcsv($file))!==false){
    $line[3]=cleanformatstring($line[3]);
    array_push($transaction,$line);
}
$TOTALS=calculateTotals($transaction);


?>