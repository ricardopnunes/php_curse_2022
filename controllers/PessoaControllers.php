<?php
// require_once "../models/IPessoa.php";
// require_once "../models/pessoa_juridica.php";
// require_once "../models/pessoa_fisica.php";
// require_once "../models/classes.php";


// $id = $_POST['ID'];
// $nome = $_POST['name'];
// $cpf = $_POST['cpf/cnpj'];
// $cep = $_POST['cep'];
// $celular = $_POST['celular'];

// $pessoa_fisica = new PessoaFisica(1,"Ricardo","9999999999","57");
// $pessoa_fisica->setGenero("M");
// echo $pessoa_fisica->getGenero();

$dados_pessoa = [
    "id" =>10,
    "nome" =>"Ricardo P Nunes",
    "status" =>"Ativo",
    "email" =>"ricardopontin145@gmail.com",
    "phone" =>"54 991754639",
    "gender" =>"M",
    "type" =>"CPF",
    "cep" =>"95707110"

];


header('Content-Type: application/json; charset=utf-8');
$a= json_encode($dados_pessoa);
echo $a ;
echo $a->nome;
exit();










