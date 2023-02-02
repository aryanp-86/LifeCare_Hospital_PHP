<?php
$marks=array(26,2,5,24,6);
function total($marks){
    $sum=0;
    $sumTotal=0;
    foreach ($marks as $sum) {
        $sumTotal+=$sum;
        
    }
    return $sumTotal;
}
$display=total($marks);
echo"Your total marks are $display";
?>