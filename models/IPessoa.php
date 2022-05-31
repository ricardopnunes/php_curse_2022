<?php

interface IPessoa
{
    public function Salvar($pessoa);

    public function ObtPessoa($id);

    public function Atualizar($pessoa);

    public function Excluir($id);

    public function ObtTodos();

}