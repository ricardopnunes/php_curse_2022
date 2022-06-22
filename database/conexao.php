<?php

$conexao = mysqli_connect("localhost", "root", "qwe123", "curso22");

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
