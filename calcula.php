<?php
$array = [1,2,3,45,6,8,9,78,10,55,33];

function for_biru($array){
    $cont_par = 0;

    for($i=0;$cont_par<5;$i++){
        $resto=$array[$i]%2;
        if($resto == 0){
            $cont_par++;
        }
    }
    echo "<br><b>Contador de pares for: {$cont_par} <br> Contador i for:{$i}";
}

function while_biru($array){
    $i=0;
    $cont_par=0;
    while($cont_par<5){
        $resto=$array[$i]%2;

        if($resto == 0){
          $cont_par++;
        }
       $i++;
    }

    echo "<br>Contador de pares while: {$cont_par} <br> Contador i while:{$i}";

}

function doo_while($array)
{
    $i=0;
    $cont_par = 0;
    do{
        $resto=$array[$i]%2;
        if($resto == 0){
            $cont_par++;
        }
       $i++;
    } while($cont_par<5);
    
    echo "<br>Contador de pares do_while: {$cont_par} <br> Contador i do_while: {$i}</b>";
}

echo "Data Hora Inicio: " .date("d/m/y ") .date(" g:i:s a");
for_biru($array);
echo '<br><br><br>';
while_biru($array);
echo '<br><br><br>';
doo_while($array);
echo "<br>Data Hora Final: " .date("d/m/y ") .date(" g:i:s a");

