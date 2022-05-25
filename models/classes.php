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
    public function Salvar($pessoa)
    {
        echo "Pessoa: $this->id and nome: $this->nome";
    }
    public function ObtPessoa($id)
    {

    }
    public function Atualizar($pessoa)
    {

    }
    public function Excluir($id)
    {

    }
    public function ObtTodos()
    {

    }

}