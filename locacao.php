<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$habilitacao = $_POST['habilitacao'];
$dataEntrada = $_POST['dataEntrada'];
$dataSaida = $_POST['dataSaida'];

include "conexao.php";


$sqlInserir = "INSERT INTO detalhes_locacao(nome, telefone, habilitacao, dataEntrada, dataSaida
) VALUES
(
    '{$nome}' , 
    '{$telefone}' , 
    '{$habilitacao}' , 
    '{$dataEntrada}', 
    '{$dataSaida}'
);";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "<Inserido com sucesso!<br>";
    echo "<a href='index.php'>VOLTAR</a><br>";
}else{
    echo "Algum erro aconteceu";
}


