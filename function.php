<?php
include_once("conexao.php");

function retorna($modelo, $conexao){
	$result_modelo = "SELECT * FROM descricao_veiculo WHERE modelo = '{$modelo}'";
	$resultado_descricao = mysqli_query($conexao, $result_modelo);
	
	if($resultado_descricao->num_rows){
		$row_descricao = mysqli_fetch_assoc($resultado_descricao);
		$valores['cor'] = $row_descricao['cor'];
		$valores['placa'] = $row_descricao['placa'];
		$valores['ano'] = $row_descricao['ano'];
		$valores['km'] = $row_descricao['km'];
		$valores['valor'] = $row_descricao['valor'];
		
	}else{
		$valores['cor'] = "Carro não encontrado";
	}
	return json_encode($valores);
	
}

if(isset($_GET['modelo'])){
	echo retorna($_GET['modelo'], $conexao);
}
?>

