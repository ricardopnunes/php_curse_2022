<?php
require_once "classes.php";
require_once "IPessoa.php";

class PessoaFisica extends Pessoa
{

    public $cpf;
    public $genero; 
    public $rg;
    public $est_civil;
    public $data_nasc;
    public $pis;
    public $naturalidade;
    public $profissao;
    public $escolaridade;

    public function __construct(){
        parent::__construct;
    }

    public function formata_cpf($cpf){

        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        $tipo_dado = NULL;
        if(strlen($cpf)==11){
            $tipo_dado = "cpf";
        }
        if(strlen($cpf)==14){
            $tipo_dado = "cnpj";
        }
        switch($tipo_dado){
            default:
                $cpf_formatado = "Não foi possível definir tipo de dado";
            break;
    
            case "cpf":
                $bloco_1 = substr($cpf,0,3);
                $bloco_2 = substr($cpf,3,3);
                $bloco_3 = substr($cpf,6,3);
                $dig_verificador = substr($cpf,-2);
                $cpf_formatado = $bloco_1.".".$bloco_2.".".$bloco_3."-".$dig_verificador;
            break;
            
        }
        return $cpf_formatado;
    }
    
    
}
