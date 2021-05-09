<?php
include "conexao.php";

function retorna($modelo, $conexao){
	$result = "SELECT * FROM alunos WHERE matricula = '$matricula' LIMIT 1";
	$resultado = mysqli_query($conexao, $result);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
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