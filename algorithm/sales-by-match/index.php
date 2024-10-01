<?php 

function sockMerchant($n, $ar) {
    $items = array_count_values($ar);
    $unpairs = 0;

    foreach($items as $a){
        if($a % 2 !== 0){
            $unpairs++;
        }
    }

    return (count($ar) - $unpairs)/2;
}

$n = 9;
$ar = [1,1,3,1,2,1,3,3,3,3];
print_r(sockMerchant($n, $ar));