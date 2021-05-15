<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$habilitacao = $_POST['habilitacao'];
$dataEntrada = $_POST['dataEntrada'];
$dataSaida = $_POST['dataSaida'];
$marca = $_POST['marca'];

include "conexao.php";


$sqlInserir = "INSERT INTO detalhes_locacao(nome, telefone, habilitacao, dataEntrada, dataSaida, fk_marca
) VALUES
(
    '{$nome}' , 
    '{$telefone}' , 
    '{$habilitacao}' , 
    '{$dataEntrada}', 
    '{$dataSaida}',
    '{$marca}'
);";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "<Inserido com sucesso!<br>";
    echo "<a href='index.php'>VOLTAR</a><br>";
}else{
    echo "Algum erro aconteceu";
}



    $sqlBusca = "SELECT * FROM detalhes_locacao "; //
    $resultado_busca = mysqli_query($conexao, $sqlBusca);

    ?>

    <table class="table table-hover">
    <tr>
        
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>HABILITAÇÃO</th>
        <th>DATA ENTRADA</th>
        <th>DATA SAÍDA</th>
        <th>MARCA</th>
    </tr>

    <?php 
    while($row_busca = mysqli_fetch_assoc($resultado_busca)){
        echo "<tr>";
        
        echo "<td>{$row_busca['nome']}</td>";
        echo "<td>{$row_busca['telefone']}</td>";
        echo "<td>{$row_busca['habilitacao']}</td>";
        echo "<td>{$row_busca['dataEntrada']}</td>";
        echo "<td>{$row_busca['dataSaida']}</td>";
        echo "<td>{$row_busca['fk_marca']}</td>";
        echo "<tr>";
    }
    ?>

    </table>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>