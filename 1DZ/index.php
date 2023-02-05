<?php
$mass = [1, 9, 5, 2, 0, -3, 5, 4];
$i=0;
$massRes = [];
$result = 0;
while($i!=count($mass)){
    while($mass[$i]>=0){
        $massRes[$i] = $mass[$i];
       
        $i++;
        $result = array_sum($massRes);    
        echo $result."\n";


    }
    

    
  
    
}
