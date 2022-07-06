<?php

require "../controllers/PessoaControllers.php";

$host = "localhost";
$user = "aluno";
$pass = "qwe123";
$db = "curso22";

$conexao = mysqli_connect($host, $user, $pass, $db);

if($conexao->connect_error)
{
    die("Conexão com o banco de dados falhou: ". $conexao->connect_error);
}
else
{
    echo "Deu bom!\n";
}



foreach($dados_pessoas as $dado){
    $sql = "INSERT INTO curso22.pessoas (nome,email,cpf,rg,genero,rede_social,status,phone,tipo,cep) 
    VALUES (
    '{$dado['nome']}',
    '{$dado['email']}',
    '{$dado['cpf']}',
    '{$dado['rg']}',
    '{$dado['gender']}',
    '{$dado['redeSocial']}',
    '{$dado['status']}',
    '{$dado['phone']}',
    '{$dado['type']}',
    '{$dado['cep']}')";

    if ($conexao->query($sql) === TRUE) {
        echo "Registros adicionados!\n";
    } else {
        echo "Error: " . $sql . "<br>" . $conexao->error;
    }

}


  