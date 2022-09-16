<?php
function calculateTotals(array $arr)
{
    $income = 0;
    $expense = 0;
    $total = 0;
    foreach ($arr as $subarr) {
        $num=$subarr->getAmount();
        $total += $num;
        if ($num> 0) $income += $num;
        else $expense +=$num;
    }
    return ["Income" => $income, "Expense" => $expense, "Total" => $total];
}


function addformatativenegAmount($num){
        return str_replace('-','',$num);
}