<?php
$array = [1,2,3,45,6,8,9,78,10,55,33];
class ClassFor{

    public $pares = [];
    public $impares = [];


    
    public function separa_vetores($array){

        $cont_par = 0;
        $cont_impares = 0;

        for($i=0; $i < count($array); $i++){

            $resto=$array[$i]%2;
        
            if($resto == 0){

                $pares[$cont_par] = $array[$i];
                $cont_par++;
            }

            else{

                $impares[$cont_impares] = $array[$i];
                $cont_impares++;
            }

        }
        
        echo "Numeros de pares: {$cont_par}<br> Numero de Impares: {$cont_impares} <br>";
        print_r($pares);
        echo "<br>";
        print_r($impares);
    }


    public function conta_impares($impares){
        $cont_impares =0;
        for($i=0;$i<count($impares); $i++){
            $resto = $impares[$i] % 2;
            if($resto != 0){
                $cont_impares++;
            }
        }
        
        echo "<br> {$cont_impares} <br>";
        var_dump($impares);
    }

    public function doo_while($array)
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
    
        echo "<br>Contador de pares Classe do_while: {$cont_par} <br> Contador i do_while: {$i}</b>";
    }

    
    public function eprimo($impares){

    }
}  

$n = new ClassFor;
$a = $n->separa_vetores($array);
var_dump($a);

