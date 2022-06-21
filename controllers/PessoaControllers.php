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
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>1,
    "email" =>"ricardopontin145@gmail.com",
    "phone" =>"54 991754639",
    "type" =>"CPF",
    "cep" =>"95707110",
    "gender" =>"M",
    
],

[
    "id" =>2,
    "nome" =>"Aviao P Nunes",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>0,
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "type" =>"CNPJ",
    "cep" =>"95707110",
    "gender" =>"M",
],

[
    "id" =>3,
    "nome" =>"Babybaby do Biruleibe Leibe",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>1,
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "type" =>"CNPJ",
    "cep" =>"95707110",
    "gender" =>"M",
],

[
    "id" =>4,
    "nome" =>"Lohaine Stefâni Do HAHAHA",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>1,
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "type" =>"CNPJ",
    "cep" =>"95707110",
    "gender" =>"M",
],

[
    "id" => 5,
    "nome" =>"Ricardo P Nunes",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>0,
    "email" =>"ricardopontin145@gmail.com",
    "phone" =>"54 991754639",
    "type" =>"CPF",
    "cep" =>"95707110",
    "gender" =>"M",
    
],

[
    "id" =>6,
    "nome" =>"Aviao P Nunes",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>0,
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "type" =>"CNPJ",
    "cep" =>"95707110",
    "gender" =>"M",
],

[
    "id" =>7,
    "nome" =>"Babybaby do Biruleibe Leibe",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>1,
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "type" =>"CNPJ",
    "cep" =>"95707110",
    "gender" =>"M",
],

[
    "id" =>8,
    "nome" =>"Lohaine Stefâni Do HAHAHA",
    "cpf" =>"04579729048",
    "rg" =>"96455454",
    "redeSocial" =>"@Creator",
    "status" =>1,
    "email" =>"Avião@gmail.com",
    "phone" =>"54 991759999",
    "type" =>"CNPJ",
    "cep" =>"95707110",
    "gender" =>"M",
],
];



foreach($dados_pessoas as $dado){
    if($dado['id'] == $idPessoa){
        $pessoa = $dado;
        break;
    }
}

header("content-type: application/json, charset=utf-8");

echo json_encode($dados_pessoas);
