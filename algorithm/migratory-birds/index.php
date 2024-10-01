<?php 

function migratoryBirds($arr) {
    $x = array_count_values($arr);
    $values = array_keys($x, max($x));

    return min($values);
}

$arr = [1,4,4,5,2,2,3];

print_r(migratoryBirds(($arr)));