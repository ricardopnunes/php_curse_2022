<?php
// require_once "../models/IPessoa.php";
// require_once "../models/pessoa_juridica.php";
// require_once "../models/pessoa_fisica.php";
// require_once "../models/classes.php";

$idPessoa = $_REQUEST["id"] ?? 0;

$pessoa = [];

$dados_pessoas = [
[
    "id" => 1,
    "nome" =>"Ricardo P Nunes",
    "status" =>"Ativo",
    "email" =>"ricardopontin145@gmail.com",
    "phone" =>"54 991754639",
    "gender" =>"M",
    "type" =>"CPF",
    "cep" =>"95707110",
    
],

[
    "id" =>2,
    "nome" =>"Aviao P Nunes",
    "status" =>"Ativo",
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "gender" =>"M",
    "type" =>"CNPJ",
    "cep" =>"95707110",
],

[
    "id" =>3,
    "nome" =>"Babybaby do Biruleibe Leibe",
    "status" =>"Ativo",
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "gender" =>"M",
    "type" =>"CNPJ",
    "cep" =>"95707110",
],

[
    "id" =>4,
    "nome" =>"Lohaine Stefâni Do HAHAHA",
    "status" =>"Ativo",
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "gender" =>"M",
    "type" =>"CNPJ",
    "cep" =>"95707110",
],
[
    "id" => 5,
    "nome" =>"Ricardo P Nunes",
    "status" =>"Ativo",
    "email" =>"ricardopontin145@gmail.com",
    "phone" =>"54 991754639",
    "gender" =>"M",
    "type" =>"CPF",
    "cep" =>"95707110",
    
],

[
    "id" =>6,
    "nome" =>"Aviao P Nunes",
    "status" =>"Ativo",
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "gender" =>"M",
    "type" =>"CNPJ",
    "cep" =>"95707110",
],

[
    "id" =>7,
    "nome" =>"Babybaby do Biruleibe Leibe",
    "status" =>"Ativo",
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "gender" =>"M",
    "type" =>"CNPJ",
    "cep" =>"95707110",
],

[
    "id" =>8,
    "nome" =>"Lohaine Stefâni Do HAHAHA",
    "status" =>"Ativo",
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "gender" =>"M",
    "type" =>"CNPJ",
    "cep" =>"95707110",
],
];



foreach($dados_pessoas as $dado){
    if($dado['id'] == $idPessoa){
        $pessoa = $dado;
        break;
    }
}

header('Content-type: text/html; charset=utf-8');
echo json_encode($pessoa);
