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
    echo "<br>Data da execução da Função For: ".date("d/m/y");
    echo "<br>Contador de pares for: {$cont_par} <br> contador i for:{$i}";
    echo "<br>Horário da execução da Função For: ".date("g:i:s a");
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
    echo "<br>Data da execução da Função While: ".date("d/m/y");
    echo "<br>Contador de pares while: {$cont_par} <br> contador i while:{$i}";
    echo "<br>Horário da execução da Função while: ".date("g:i:s a");
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
    
    echo "<br>Data da execução da Função do_while: ".date("d/m/y");
    echo "<br>Contador de pares do_while: {$cont_par} <br> contador i do_while:{$i}";
    echo "<br>Horário da execução da Função do while: ".date("g:i:s a");
}

echo "Data Hora Inicio: " .date("d/m/y ") .date(" g:i:s a");
for_biru($array);
echo '<br><br><br>';
echo "Data Hora Inicio: " .date("d/m/y ") .date(" g:i:s a");
while_biru($array);
echo '<br><br><br>';
echo "Data Hora Inicio: " .date("d/m/y ") .date(" g:i:s a");
doo_while($array);


