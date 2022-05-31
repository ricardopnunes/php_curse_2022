<?php

class Pessoa implements IPessoa
{
    public $id;
    public $nome;
    public $cep;
    public $celular;
    public $status;
    public $email;
    public $rede_social;

    public function __construct(int $id, string $nome, int $cep, int $celular, bool $status = true)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cep = $cep;
        $this->celular = $celular;
        $this->status = $status;
    }
    public function Salvar(Pessoa $pessoa)
    {
        echo "Pessoa: $this->id and nome: $this->nome";
    }
    public function ObtPessoa(int $id)
    {

    }
    public function Atualizar(Pessoa $pessoa)
    {

    }
    public function Excluir(int $id)
    {

    }
    public function ObtTodos()
    {

    }

}