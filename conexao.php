<?php

//CONEXÃO COM O BANCO LOCADORA.

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "locadora";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die("Falha na Conexão!". mysqli_connect_error());

?>