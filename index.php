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

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container">
       <div class="text-center">
       <img src="images/logo.png" class="img-fluid" alt="Responsive image">
       </div>
    <form action="enviar.php" method="post">
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
                        <option selected>Escolha...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                </select>
            </div>
        </div>
        <!-- Informações do Veículo -->
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="marca">MARCA</label>
                <select class="form-control" name="select_marca">
                    <option selected>Escolha...</option>                   
                    <?php
                        $result_marcas = "SELECT * FROM marca_carros";
                        $resultado_marcas = mysqli_query($conexao, $result_marcas);
                        
                        while ($row_marcas = mysqli_fetch_assoc($resultado_marcas)){ ?>:
                            <option value="<?php /*echo $row_marcas['id_marcas']; id do db*/?>"><?php echo $row_marcas['nomes']; ?>
                            </option><?php 
                        }                  
                    
                    ?>                    
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="marca">MODELO</label>
                <select id="modelo" class="form-control" name="select_modelo">
                    
                    <?php
                            if($POST['select_marca'] == ''){
                                echo "<option selected>Escolha...</option>";
                            }else{
                                $result_modelos = "SELECT id_auto, modelo FROM automoveis";
                                $resultado_modelos = mysqli_query($conexao, $result_modelos);
                      
                                while ($row_modelos = mysqli_fetch_assoc($resultado_modelos)){ ?>:                            
                                    <option value="<?php $row_modelos['id_auto']; ?>"><?php echo $row_modelos['modelo']; ?>
                                    
                                    </option><?php 
                                            
                                    }
                            }
                            
                                
                           
                             
                        
                    ?>                    
                       
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="marca">COR</label>
                <select id="cor" class="form-control" name="cor">
                    <option selected>Escolha...</option>
                    <option>...</option>
                </select>
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
            <div class="form-group col-md-3">
                <label for="carro">KM ATUAL</label>
                <input type="text" class="form-control" id="km" name="km">
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
            <div class="form-group col-md-4">
                <label for="reserva">VALOR</label>
                <input type="text" class="form-control" id="valor" placeholder="R$" name="valor">
            </div>
        </div>
        <button type="submit" class="btn btn-secondary float-right">RESERVAR</button>
        <br><br>
    </form>

   


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>