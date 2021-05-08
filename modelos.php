<?php
include "conexao.php";
include "index.php";

$id_categoria = $_REQUEST['marca'];
	
$result_sub_cat = "SELECT * FROM automoveis WHERE fk_marca_carros = $id_categoria ORDER BY modelo";
$resultado = mysqli_query($conexao, $result_sub_cat);

while ($row_sub_cat = mysqli_fetch_object($resultado) ) {
    $sub_categorias_post[] = array(
        'id_marca'	=> $row_sub_cat['id'],
        'modelo' => utf8_encode($row_sub_cat['modelo']),
    );
}

die(json_encode('[message : "erro", success: false]'));


?> 