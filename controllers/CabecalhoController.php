<?php

$primos = [2];
$contPrimos = 1;

$numero = 2;
$divisor = 2;

while ($contPrimos < 5) {

    $contDiv = 0;
    $numero++;

    for ($divisor = 2; $divisor <= $numero; $divisor++) {
        $resto = $numero % $divisor;

        if ($resto == 0 && $divisor <= $numero) {
            $contDiv++;
        }

        if ($contDiv >= 2) {
            break;
        }
    }

    if ($contDiv != 1) {
        continue;
    }

    array_push($primos, $numero);
    $contPrimos++;

}

$primosSTR = implode(", ", $primos);
echo "Os 5 primos sao: " . $primosSTR;