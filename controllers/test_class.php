<?php
require_once "../models/IPessoa.php";
require_once "../models/pessoa_juridica.php";
require_once "../models/pessoa_fisica.php";
require_once "../models/classes.php";
?>

<form action="test_class.php" method="post">
 <p>Seu name: <input type="text" name="name" /></p>
 <p>Seu ID: <input type="number" name="ID" /></p>
 <p>Pessoa Fisica: <input type="radio" checked /></p>
 <p>Pessoa Juridica: <input type="radio"  /></p>
 <p>Seu CPF/CNPJ: <input type="text" name="cpf/cnpj" /></p>

 <p><input type="submit" /></p>
</form>

<?php

$id = $_POST['ID'];
$nome = $_POST['name'];
$cpf = $_POST['cpf/cnpj'];

if(strlen($cpf) == 14)
{
    $pessoa_juridica = new PessoaJuridica($id,$nome,$cpf);
    $pessoa_juridica->Salvar($pessoa_juridica);

}else
{
    $pessoa_fisica = new PessoaFisica($id,$nome,$cpf);
    $pessoa_fisica->Salvar($pessoa_fisica);
    echo count($cpf);
}










