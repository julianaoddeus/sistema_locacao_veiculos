<?php

if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $cadastro = [];

    $cadastro['nome'] = $_POST['nome'];

    if(isset($_POST['tel'])){
        $cadastro['tel'] = $_POST['tel'];
    }else{
        $cadastro['tel'] = '';
    }

    if(isset($_POST['habilitacao'])){
        $cadastro['habilitacao'] = $_POST['habilitacao'];
    }else{
        $cadastro['habilitacao'] = '';
    }
    
}

$cadastro ['']
 include "index.php";
 include "conexao.php";


//INSERINDO DADOS NA TABELA CLIENTE
if(isset($cadastro)){
    $sqlInserir = "INSERT INTO cliente(nome, telefone, habilitacao
    )VALUES(
        '{$cadastro['nomeCliente']}',
        '{$cadastro['telCliente']}',
        '{$cadastro['habilitacaoCliente']}'
        
    );";

    
    mysqli_query($conexao, $sqlInserir);
     
}
mysqli_close($conexao);

 
?>
    



