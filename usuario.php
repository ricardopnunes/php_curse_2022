<?php
require "cabecalho.php";

$cont_impar;
$cont_par;
$resto;
$num_receb = $_REQUEST['num'];


for($i=1;$i<$num_receb;$i++){
    $resto=$i%2;
    if($resto == 0){
        echo "par: " . $i. ' <br></br>';
        $cont_par++;
    }else{
        $cont_impar++;
        echo"impar: ". $i. ' <br></br>';
    }
}


echo "quantos pares de 1 a 10: {$cont_par} ".'<br></br>';
echo "quantos impares de 1 a 10: {$cont_impar} ";


echo '<br></br><br></br>';

echo "Teste com um numero digitado!";

echo '<br></br><br></br>'; 

$array = [10];
for($a=0;$a<10;$a++){
    $array[$a] = $a;
    echo "Array: {$array[$a]}<br></br>";
}

echo htmlspecialchars($array[9]);
