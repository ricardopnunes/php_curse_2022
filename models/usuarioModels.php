<?php

require "../database/conexao.php";

class UsuarioModel
{
    private $conexao = null;
    protected $nomeTabela = "usuarios";

    public function __construct()
    {
        global $conexao;
        $this->conexao = $conexao;
    }

    public function desconectar()
    {
        $this->conexao->close();
        $this->conexao = null;
    }

    public function listar()
    {
        $sql = "SELECT * FROM {$this->nomeTabela}";
        $result = $this->conexao->query($sql);

        return $result ?? [];
    }

    public function obter($idUsuario)
    {
        $sql = "SELECT * FROM {$this->nomeTabela} WHERE id={$idUsuario} LIMIT 1";
        $result = $this->conexao->query($sql);

        return $result ?? [];
    }

    public function cadastrar($nome, $usuario, $email, $senha, $status, $email_recuperacao)
    {
        $sql = "INSERT
			INTO
				{$this->nomeTabela}
			(
				nome,
				usuario,
				email,
				senha,
				status,
				email_recuperacao
			)
			VALUES(
				'{$nome}',
				'{$usuario}',
				'{$email}',
				'{$senha}',
				'{$status}',
				'{$email_recuperacao}'
			);";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->insert_id; // retorna ultimo id gravado no banco.
        }

        return 0;
    }

    public function atualizar($nome, $usuario, $email, $senha, $status, $email_recuperacao, $idUsuario)
    {
        $sql = "UPDATE
				{$this->nomeTabela}
			SET
				nome = '{$nome}',
				usuario = '{$usuario}',
				email = '{$email}',
				senha = '{$senha}',
				status = '{$status}',
				email_recuperacao = '{$email_recuperacao}'
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
        $sql = "DELETE FROM {$this->nomeTabela} WHERE id={$idUsuario}";
        $result = $this->conexao->query($sql);

        return $result;
    }
}

