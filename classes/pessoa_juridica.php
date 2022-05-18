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

    public function __construct(int $id = 0, string $nome = null, string $cnpj = null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }

    public function Salvar($pessoa)
    {
        echo "Pessoa: $this->id and nome: $this->nome and cnpj: $this->cnpj";
    }

}