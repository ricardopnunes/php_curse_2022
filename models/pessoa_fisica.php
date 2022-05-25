<?php
require_once "classes.php";
require_once "IPessoa.php";

class PessoaFisica extends Pessoa
{

    private $cpf;
    private $genero; 
    private $rg;
    private $est_civil;
    private $data_nasc;
    private $pis;
    private $naturalidade;
    private $profissao;
    private $escolaridade;

    //Getters
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function getDataNasc()
    {
        return $this->data_nasc;
    }
    public function getEstadoCivil()
    {
        return $this->est_civil;
    }
    public function getRg()
    {
        return $this->rg;
    }
    public function getPis()
    {
        return $this->pis;
    }
    public function getNaturalidade()
    {
        return $this->naturalidade;
    }
    public function getProfissao()
    {
        return $this->profissao;
    }
    public function getEscolaridade()
    {
        return $this->escolaridade;
    }

    //Setters
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
    }
    public function setEstadoCivil($est_civil)
    {
        $this->est_civil = $est_civil;
    }
    public function setRg($rg)
    {
        $this->rg = $rg;
    }
    public function setPis($pis)
    {
        $this->pis = $pis;
    }
    public function setNaturalidade($naturalidade)
    {
        $this->naturalidade = $naturalidade;
    }
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }
    public function setEscolaridade($escolaridade)
    {
        $this->escolaridade = $escolaridade;
    }
    
}
