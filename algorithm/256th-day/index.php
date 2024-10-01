<?php 

function dayOfProgrammer($year) {
    $input = $year . '-01-01';
    $date = new DateTime($input);

    if ($year < 1918 && $year % 100 == 0 && $year % 400 !== 0 && $year % 4 == 0) {
        $modified = $date->modify('+254 days');
    } elseif ($year == 1918) {
        $modified = $date->modify('+268 days');
    } else {
        $modified = $date->modify('+255 days');
    }

    return $modified->format('d.m.Y');
}

$year = 1918;
print_r(dayOfProgrammer($year));