<form action="usuario.php" method="post">
    Numero:  <input type="number" name="num" /><br />
    <input type="submit" name="submit" value="Salvar" />
</form>

<?php
$cont_impar;
$cont_par;
$resto;
for($i=1;$i<10;$i++){
    $resto=$i%2;
    if($resto == 0){
        echo "par: " . $i. '<br></br>';
        $cont_par++;
    }else{
        $cont_impar++;
        echo"impar: ". $i. '<br></br>';
    }
}
echo "quantos pares de 1 a 10: {$cont_par} ".'<br></br>';
echo "quantos impares de 1 a 10: {$cont_impar} ";


echo '<br></br><br></br>';

echo "Teste com um numero digitado!";

echo '<br></br><br></br>';

if ($_REQUEST['num']%2 == 0){
    echo "o numero: {$_REQUEST['num']} É par".'<br></br>';
}else if($_REQUEST['num']%2 != 0){
    echo "o numero: {$_REQUEST['num']} É impar".'<br></br>';
}

$array = [10];
for($a=0;$a<10;$a++){
    $array[$a] = $a;
    echo "Array: {$array[$a]}<br></br>";
}

echo htmlspecialchars($array[9]);
