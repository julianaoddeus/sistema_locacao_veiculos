<?php
include_once("conexao.php");

function retorna($modelo, $conn){
	$result_modelo = "SELECT * FROM descricao_veiculo WHERE modelo = '$modelo' LIMIT 1";
	$resultado_descricao = mysqli_query($conn, $result_modelo);
	if($resultado_descricao->num_rows){
		$row_descricao = mysqli_fetch_assoc($resultado_descricao);
		$valores['cor'] = $row_descricao['cor'];
		$valores['placa'] = $row_descricao['placa'];
	}else{
		$valores['cor'] = 'Aluno não encontrado';
	}
	return json_encode($valores);
	
}

if(isset($_GET['modelo'])){
	echo retorna($_GET['modelo'], $conn);
}
?>