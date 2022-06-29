<?php

require "../controllers/PessoaControllers.php";

$host = "localhost";
$user = "aluno";
$pass = "qwe123";
$db = "curso22";

$conexao = mysqli_connect($host, $user, $pass, $db);

if(!$conexao)
{
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else
{
    echo "Deu bom!";
}

$sql = mysqli_prepare($conexao,"INSERT INTO `curso22.pessoas` (nome,email,cpf,rg,genero,rede_social,status,phone,tipo,cep) 
    VALUES (
    {$dado['nome']},{$dado['email']},
    {$dado['cpf']},{$dado['rg']},
    {$dado['gender']},{$dado['redeSocial']},
    {$dado['status']},{$dado['phone']},
    {$dado['type']},{$dado['cep']})");
    if($sql !== FALSE){
        if(mysqli_stmt_execute($sql)){
            echo "New record created successfully";
        } else {
            echo mysqli_stmt_error($sql);
        }
    } 
        else{
            echo mysqli_error($conexao);
        }


foreach($dados_pessoa as $dado){
}
