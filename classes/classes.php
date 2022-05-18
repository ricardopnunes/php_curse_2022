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

    public function __construct(int $id = 0, string $nome = null)
    {
        $this->id = $id;
        $this->nome = $nome;
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