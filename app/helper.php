<?php
function cleanformatstring(string $amount): float
{
    return (float) str_replace(['$', ','], '', $amount);
}

function calculateTotals(array $arr)
{
    $income = 0;
    $expense = 0;
    $total = 0;
    foreach ($arr as $subarr) {
        $num=$subarr[3];
        $total += $num;
        if ($num> 0) $income += $num;
        else $expense +=$num;
    }
    return ["Income" => $income, "Expense" => $expense, "Total" => $total];
}

function addformatdate($date){
    return date('j M y', $date);
}

function addformatativenegAmount($num){
        return str_replace('-','',$num);
}