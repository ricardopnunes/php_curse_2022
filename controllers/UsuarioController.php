<?php

$primo_array = [2,3,4,5,6,9,11,13,17,19,23,28,29,31,37,43,47,51,496];
$perf_array = [1,2,3,6,28,500,31,29,18,496,5,9];

function separa_primos($primo_array)
{
    $i = 0;
    $cont_primos = 0;
    $primos = [];
    $div = 2;

    for($i=0; $cont_primos < 5; $i++)
    {
        $conta_div=0;
        $n = $primo_array[$i];
    
        for($div=2; $div <= $n; $div++)
        {
            $resto = $n % $div;
    
            if($resto == 0 && $div <= $n)
            {
                $conta_div++;
            }
    
            if($conta_div >=2)
            {
                break;
            }
        }
        
        if($conta_div != 1)
        {
            continue;
        }
    
        array_push($primos, $n);
        $cont_primos++;
    }
    
    for($j=0; $j < count($primos); $j++)
    {
        echo " Primo: " . $primos[$j];
    }
}

function separa_perfeitos($perf_array)
{
    $cont_perfeitos =0;
    $perfeitos = [];
    $i =0;

    while($cont_perfeitos < 3) 
    {
        $soma =0;
        $n = $perf_array[$i];
        $metade = $n/2;

        for($j=1; $j <= $metade; $j++) 
        {
            $resto = $n % $j;

            if($resto == 0)
            {
                $soma+=$j;
            }
        }
    
        if($soma == $n)
        {
            array_push($perfeitos, $n);;
            $cont_perfeitos++;
        }

        $i++;
    }

    for($i=0; $i < count($perfeitos); $i++)
    {
        echo " Perfeito: " . $perfeitos[$i];
    }
}
 
separa_primos($primo_array);
echo "\n";
separa_perfeitos($perf_array);

