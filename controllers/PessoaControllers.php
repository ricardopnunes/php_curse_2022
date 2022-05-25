<?php
require_once "IPessoa.php";
require_once "pessoa_juridica.php";
require_once "pessoa_fisica.php";
require_once "classes.php";


// $id = $_POST['ID'];
// $nome = $_POST['name'];
// $cpf = $_POST['cpf/cnpj'];
// $cep = $_POST['cep'];
// $celular = $_POST['celular'];

$pessoa_fisica = new PessoaFisica(1,"Ricardo","9999999999","57");
$pessoa_fisica->setGenero("M");
echo $pessoa_fisica->getGenero();













