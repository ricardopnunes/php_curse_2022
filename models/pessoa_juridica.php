<?php
require_once "classes.php";
require_once "IPessoa.php";

class PessoaJuridica extends Pessoa
{
    public $cnpj;
    public $ie;
    public $data_funda;
    public $nacionalidade;
    public $cnae;

    public function __construct()
    {
        parent::__construct;
    }

    public function formata_cnpj($cnpj){

        $cnpj = preg_replace("/[^0-9]/", "", $cnpj);
        $tipo_dado = NULL;
        if(strlen($cnpj)==11){
            $tipo_dado = "cpf";
        }
        if(strlen($cnpj)==14){
            $tipo_dado = "cnpj";
        }
        switch($tipo_dado){
            default:
                $cnpj_formatado = "Não foi possível definir tipo de dado";
            break;
    
            case "cnpj":
                $bloco_1 = substr($cnpj,0,2);
                $bloco_2 = substr($cnpj,2,3);
                $bloco_3 = substr($cnpj,5,3);
                $bloco_4 = substr($cnpj,8,4);
                $digito_verificador = substr($cnpj,-2);
                $cnpj_formatado = $bloco_1.".".$bloco_2.".".$bloco_3."/".$bloco_4."-".$digito_verificador;
            break;
        }
        return $cnpj_formatado;
    }
    

}