<?php 

function bonAppetit($bill, $k, $b) {
    unset($bill[$k]);

    if ($b == (array_sum($bill) / 2)) {
        return 'Bon Appetit';
    } else {
        return ($b - (array_sum($bill) / 2));
    }
}

$bill = [3,10,2,9];
$k = 1;
$b = 7;

print_r(bonAppetit($bill, $k, $b));