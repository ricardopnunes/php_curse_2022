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

    public function __construct(int $id = 0, string $nome = null, string $cpf = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function Salvar($pessoa)
    {
        echo "Pessoa: $this->id and nome: $this->nome and cpf: $this->cpf";
    }

}
