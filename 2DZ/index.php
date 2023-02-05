<?php
$mass = [20, 40, 50];
$i = 0;
$massRes=[];
while($i<count($mass)){
    $massRes[$i] = $mass[$i];   
    $i++;
    if(array_sum($massRes)<100){
        echo "Сумма массива: ".array_sum($massRes)." Число элементов массива: ".count($massRes)."\n";
    }
}