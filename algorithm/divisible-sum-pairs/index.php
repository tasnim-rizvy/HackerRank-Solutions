<?php 

function divisibleSumPairs($n, $k, $ar) {
    $result = [];
    for( $i = 0; $i < count($ar); $i++ ){
        for( $j = $i+1; $j < count($ar); $j++){
            if( ($ar[$i] + $ar[$j]) % $k == 0){
                $result[] = [$ar[$i], $ar[$j]];
            }
        }
    }
    return count($result);
}

$n = 6;
$k = 3;
$ar = array(1,3,2,6,1,2);

print_r(divisibleSumPairs($n, $k, $ar));