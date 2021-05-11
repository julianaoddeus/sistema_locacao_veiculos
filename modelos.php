<?php
include "conexao.php";

$marca = $_GET["marca"];

$sqlBusca = "SELECT * FROM descricao_veiculo WHERE marca_id = " . $marca;
$resultado = mysqli_query($conexao , $sqlBusca);
$listaModelos = [];
while($modelo = mysqli_fetch_assoc($resultado)){
    $listaModelos[] = $modelo;
}
?>
<?php foreach($listaModelos as $modelo): ?>
    <option value="<?php echo $modelo['id']; ?>"><?php echo $modelo['modelo']; ?></option>
<?php endforeach; ?>
 
	

