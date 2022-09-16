<?php
declare(strict_types = 1);
require('helper.php');
spl_autoload_register(function($class){
    require $class. ".php";
});


$file =fopen("../transaction_files/sample_1.csv", "r");
fgetcsv($file);
$transaction=[];
while(($line= fgetcsv($file))!==false){
    $trans=( new Transaction($line[0], $line[1], $line[2], $line[3]));
    array_push($transaction,$trans);
}
$TOTALS=calculateTotals($transaction);


?>