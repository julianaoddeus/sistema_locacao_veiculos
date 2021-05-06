<?php
include "conexao.php";

function retorna($matricula, $conexao){
	$result_modelo = "SELECT * FROM alunos WHERE matricula = '$matricula' LIMIT 1";
	$resultado_modelo = mysqli_query($conexao, $result_modelo);
	if($resultado_modelo->num_rows){
		$row_modelo = mysqli_fetch_assoc($resultado_modelo);
		$valores['nome_aluno'] = $row_aluno['nome_aluno'];
		$valores['rg'] = $row_aluno['rg'];
	}else{
		$valores['nome_aluno'] = 'Aluno não encontrado';
	}
	return json_encode($valores);
}

if(isset($_GET['matricula'])){
	echo retorna($_GET['matricula'], $conn);
}
?>