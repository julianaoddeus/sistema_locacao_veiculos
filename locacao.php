<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$habilitacao = $_POST['habilitacao'];
$dataEntrada = $_POST['dataEntrada'];
$dataSaida = $_POST['dataSaida'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];






$sqlInserir = "INSERT INTO detalhes_locacao(nome, telefone, habilitacao, dataEntrada, dataSaida, fk_marca, fk_modelo
) VALUES
(
    '{$nome}' , 
    '{$telefone}' , 
    '{$habilitacao}' , 
    '{$dataEntrada}', 
    '{$dataSaida}',
    '{$marca}',
    '{$modelo}'
   
   
);";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "<Inserido com sucesso!<br><br>";
    echo "<a href='index.php' class='btn btn-danger p-2 mt-3'>VOLTAR</a><br><br>";
}else{
    echo "' <a href='index.php' class='btn btn-danger p-2 mt-3'>Algum erro aconteceu</a>";
}



    $sqlBusca = "SELECT l.nome, l.telefone, l.habilitacao, l.dataEntrada, l.dataSaida, m.marca, v.modelo, v.cor, v.ano, v.km, v.placa, v.valor FROM detalhes_locacao l JOIN marca_veiculos  m ON l.fk_marca = m.id JOIN descricao_veiculo v ON l.fk_modelo = v.modelo ORDER BY l.nome"; //
    
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
        <th>MODELO</th>
        <th>COR</th>
        <th>ANO</th>
        <th>KM</th>
        <th>PLACA</th>
        <th>R$</th>
    </tr>

    <?php 
    while($row_busca = mysqli_fetch_assoc($resultado_busca)){
        echo "<tr>";
        
        echo "<td>{$row_busca['nome']}</td>";
        echo "<td>{$row_busca['telefone']}</td>";
        echo "<td>{$row_busca['habilitacao']}</td>";
        echo "<td>{$row_busca['dataEntrada']}</td>";
        echo "<td>{$row_busca['dataSaida']}</td>";       
        echo "<td>{$row_busca['marca']}</td>";
        echo "<td>{$row_busca['modelo']}</td>";
        echo "<td>{$row_busca['cor']}</td>";
        echo "<td>{$row_busca['ano']}</td>";
        echo "<td>{$row_busca['km']}</td>";
        echo "<td>{$row_busca['placa']}</td>";
        echo "<td>{$row_busca['valor']}</td>";
        echo "<tr>";
    }
    ?>

    </table>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>


