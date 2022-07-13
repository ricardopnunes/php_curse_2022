<?php

require "../database/conexao.php"; // require - importa uma vez | require_once - importa toda vez que o arquivo usuários é acessado/chamado.

class PessoaModel
{
    private $conexao = null;
    protected $nomeTabela = "pessoas";

    public function __construct()
    {
        global $conexao; // acessamos (global) a variavel $conexao do arquivo Conexao.php
        $this->conexao = $conexao;
    }

    // desconectamos do banco de dados.
    public function desconectar()
    {
        $this->conexao->close();
        $this->conexao = null;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->nomeTabela} WHERE status != 0";
        $result = $this->conexao->query($sql);

        return $result ?? [];
    }

    public function obter($idUsuario)
    {
        $sql = "SELECT * FROM {$this->nomeTabela} WHERE id={$idUsuario} LIMIT 1";
        $result = $this->conexao->query($sql);

        return $result ?? [];
    }

    public function cadastrar($nome, $email,$cpf, $rg, $genero, $rede_social, $status,$phone,$tipo,$cep)
    {
        $sql = "INSERT INTO curso22.pessoas 
        (
        nome,
        email,
        cpf,
        rg,
        genero,
        rede_social,
        status,
        phone,
        tipo,
        cep
        ) 
        VALUES (
        {$nome},
        {$email},
        {$cpf},
        {$rg},
        {$gender},
        {$redeSocial},
        {$status},
        {$phone},
        {$type},
        {$cep});";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->insert_id; 
        }

        return 0;
    }

    public function atualizar($nome, $email,$cpf, $rg, $genero, $rede_social, $status,$phone,$tipo,$cep)
    {
        $sql = "UPDATE
				{$this->nomeTabela}
			SET
            nome        =       {$nome}
            email       =       {$email}
            cpf         =       {$cpf}
            rg          =       {$rg}
            genero      =       {$gender}
            rede_social =       {$redeSocial}
            status      =       {$status}
            phone       =       {$phone}
            tipo        =       {$type}
            cep         =       {$cep}
			WHERE
				id = {$idUsuario};";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->affected_rows; // retorna o numero de linhas atualizadas.
        }

        return 0;
    }

    public function excluir($idUsuario)
    {
        $sql = "UPDATE {$this->nomeTabela} 
                SET 
                deleted = 1
                status  = 0
                WHERE id={$idUsuario}";

        $result = $this->conexao->query($sql);

        return $result;
    }
}

// $pessoa = new PessoaModel();
// $dadosPessoa = [];

// $resutado = $pessoa->listar();

// if($resutado->num_rows > 0){
//     while($row = $resutado->fetch_assoc()){
//         $dadosPessoa[] = $row;
//     }
// }

// header('Content-Type: application/json; charset=utf-8');

// echo json_encode($dadosPessoa);
