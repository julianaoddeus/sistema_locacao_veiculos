<?php

 include "index.php";
 include "conexao.php";

 $marca = $_REQUEST["select_marca"];

$result = "SELECT *
    FROM descricao_veiculo 
    WHERE marca_id = $marca 
    ORDER BY modelo";

$resultado = mysqli_query($conexao, $result);
while ($row = mysqli_fetch_assoc($resultado) ) {
    $modelos[] = array(
        "id"	=> $row["id"],
        "modelo" => utf8_encode($row["modelo"]),
    );
}
?>