<?php
    include "conexao.php"
?>
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

        .carregando {
            color: #ff0000;
            display: none;
        }

    </style>

  </head>
<body>        
   <div class="container">
       <div class="text-center">
       <img src="images/logo.png" class="img-fluid" alt="Responsive image">
       </div>
    <form action="cliente.php" method="POST">
        <!-- Informações do Cliente -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="cliente">NOME</label>
                <input type="nome" class="form-control" id="inputNome" required name="nomeCliente">
            </div>
            <div class="form-group col-md-4">
                <label for="cliente">TELEFONE</label>
                <input type="text" class="form-control" id="tel" name="telCliente" >
            </div>
            <div class="form-group col-md-2">
                <label for="cliente">HABILITAÇÃO</label>
                <select id="cor" class="form-control" name="habilitacaoCliente">
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
                <select id="marca" class="form-control" name="marca">
                    <option selected>Escolha...</option>      
                    <!-- Traz a opção de carros que está no Banco de dados Locadora -->
                    <?php
                        $result_marcas = "SELECT DISTINCT marca FROM descricao_veiculo";
                        $resultado_marcas = mysqli_query($conexao, $result_marcas);                       

                        while($row_marcas = mysqli_fetch_assoc($resultado_marcas) ) {
                            echo '<option value="'.$row_marcas['id'].'">'.$row_marcas['marca'].'</option>';
                        }          
                    
                    ?>                    
                </select>
            </div>
            <div class="form-group col-md-4">
                <label>MODELO</label>
                <span class="carregando">Carredando...</span>
                <span class="carregando">Carredando...</span>
                <select id="modelo" class="form-control" name="modelo">
                    <option selected>Escolha...</option>
                   
                  
                </select>
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
                <input type="date" name="dataE" id="dataE" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="reserva">DATA DA SAÍDA</label>
                <input type="date" name="dataS" id="dataS" class="form-control">
            </div>
            
        </div>
        <button type="submit" class="btn btn-secondary float-right">RESERVAR</button>
        <br><br>
    </form>

    <script type='text/javascript'>
			/*
				$("select[name='modelo']").change(function(){
					let $cor = $("input[name='cor']");
					let $placa = $("input[name='placa']");
					$.getJSON('function.php',{ 
						modelo: $( this ).val() 
					},function( json ){
						$cor.val( json.cor );
						$placa.val( json.placa );
					});
				});
		*/
		</script>
    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</body>
</html>