<?php
require_once "classes.php";
require_once "IPessoa.php";

class PessoaJuridica extends Pessoa
{
    private $cnpj;
    private $ie;
    private $data_funda;
    private $nacionalidade;
    private $cnae;

    public function getCnpj()
    {
        return $this->cnpj;
    }
    public function getIe()
    {
        return $this->ie;
    }
    public function getDataFunda()
    {
        return $this->data_funda;
    }
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function getCnae()
    {
        return $this->cnae;
    }



}