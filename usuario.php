<?php

$numero = [2,3,4,5,6,9,11,13,17,19,23,28,29,31,37,43,47,51,496];
$perf = [1,2,3,6,28,496];
$i =0;
$primos = [];
$perfeitos = [];
$contPrimos = 0;
$contPerfeitos =0;


while($contPrimos < 5) {

    $div = 0;
    $n = $numero[$i];

    for($j=1; $j <= $n; $j++) {

        $resto = $n % $j;
    

        if($resto == 0){
            $div++;
        }
    }
    
    if($div == 2){

        $contPrimos++;
        array_push($primos, $n);
    }   
    
    $i++;
}

for($j=0; $j < count($primos); $j++){
    echo " Primo: " . $primos[$j];
}


$i =0;
while($contPerfeitos < 3) {
    $soma =0;
    $n = $numero[$i];

    for($j=1; $j <= $n; $j++) {

        $resto = $n % $j;

        if($resto == 0 && $j != $n){
            $soma+=$j;
            echo $soma;
        }
    }
       

    
    $contPerfeitos++;
    $i++;
}

for($j=0; $j < count($numero); $j++){
    echo " Perfeito: " . $numero[$j];
}