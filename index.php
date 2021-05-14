<?php include "conexao.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora de Veículos</title>
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <style type="text/css">
        .container {
            background-color: #222;
            color: #fff;
        }
    </style>

  </head>
<body>        
   <div class="container">
       <div class="text-center">
       <img src="images/icones/logo.png" class="img-fluid" alt="Responsive image">
       </div>
       <form method="post" action="locacao.php">
        <!-- Informações do Cliente -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cliente">NOME</label>
                <input type="nome" class="form-control" id="inputNome" required name="nome">
            </div>
            <div class="form-group col-md-4">
                <label for="cliente">TELEFONE</label>
                <input type="text" class="form-control" id="tel" name="telefone" >
            </div>
            <div class="form-group col-md-2">
                <label for="cliente">HABILITAÇÃO</label>
                <select id="cor" class="form-control" name="habilitacao">
                        <option selected>Categoria</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                </select>
            </div>
        </div>
        <!-- Informações do Veículo -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label >MARCA</label> 
                <?php
                    
                    $sqlBusca = "SELECT * FROM marca_veiculos";
                    $resultado = mysqli_query($conexao , $sqlBusca);
                    
                    $listaMarcas = [];
                    while($marca = mysqli_fetch_assoc($resultado)){
                        $listaMarcas[] = $marca;
                    }
                    ?>
                    
                    <select class="form-control" id="marca" name="marca" onchange="ConsultarModelos();">
                        <option selected>Escolha...</option>
                        <?php foreach($listaMarcas as $marca): ?>
                            <option value="<?php echo $marca['id']; ?>"><?php echo $marca['nome_veiculos']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    
                   
            </div>
             <!-- Traz a opção de modelos que está no Banco de dados Locadora -->
            <div class="form-group col-md-4">
                <label>MODELO</label>
                <select class="form-control" id="modelo" name="modelo" ></select>
            </div>

            <div class="form-group col-md-2">
                <label>COR</label>
                <input type="text" class="form-control" id="cor" name="cor">              
            </div>
        </div> 
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="carro">PLACA</label>
                <input type="text" class="form-control" id="placa" name="placa">
            </div>
            <div class="form-group col-md-3">
                <label for="carro">ANO</label>
                <input type="text" class="form-control" id="ano" name="ano">
            </div>
            <div class="form-group col-md-2">
                <label for="carro">KM ATUAL</label>
                <input type="text" class="form-control" id="km" name="km">
            </div>
            <div class="form-group col-md-2">
                <label for="reserva">VALOR</label>
                <input type="text" class="form-control" id="valor" placeholder="R$" name="valor">
            </div>
            
        </div>
        <!-- Informações de Reserva -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="reserva">DATA DA ENTREGA</label>
                <input type="date" name="dataEntrada" id="dataEntrada" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="reserva">DATA DA SAÍDA</label>
                <input type="date" name="dataSaida"  id="dataSaida" class="form-control">
            </div>
            
        </div>
        <button type="submit" class="btn btn-secondary float-right">RESERVAR</button>
        <br><br>
    </form> 
    <script src="js/jquery.js"></script>
    <script src="js/funcoes.js"></script>
    <script type='text/javascript'>
			
			$(document).ready(function(){
				$("select[name='modelo']").change(function(){
					var $cor = $("input[name='cor']");
					var $placa = $("input[name='placa']");
					$.getJSON('function.php',{ 
						modelo: $( this ).val() 
					},function( json ){
						$cor.val( json.cor );
						$placa.val( json.placa );
					});
				});
			});
		
		</script>
   
   <script src="bootstrap/js/bootstrap.bundle.js"></script>
<?php

$sqlBusca = "SELECT * FROM detalhes_locacao LIMIT 1"; //
$resultado_busca = mysqli_query($conexao, $sqlBusca);

?>

<table class="table table-hover">
<tr>
    
    <th>NOME</th>
    <th>TELEFONE</th>
    <th>HABILITAÇÃO</th>
    <th>DATA ENTRADA</th>
    <th>DATA SAÍDA</th>
</tr>

<?php 
while($row_busca = mysqli_fetch_assoc($resultado_busca)){
    echo "<tr>";
    
    echo "<td>{$row_busca['nome']}</td>";
    echo "<td>{$row_busca['telefone']}</td>";
    echo "<td>{$row_busca['habilitacao']}</td>";
    echo "<td>{$row_busca['dataEntrada']}</td>";
    echo "<td>{$row_busca['dataSaida']}</td>";
    echo "<tr>";
}
?>

</table>
   
</body>
</html>