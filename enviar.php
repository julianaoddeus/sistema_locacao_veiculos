<?php include "conexao.php";

if(isset($_POST['nome']) && $_POST['nome'] != ''){
    $cadastro = [];

    
    $cadastro['nome'] = $_POST['nome'];

    if(isset($_POST['telefone'])){
        $cadastro['telelefone'] = $_POST['telelefone'];
    }else{
        $cadastro['tel'] = '';
    }

    if(isset($_POST['habilitacao'])){
        $cadastro['habilitacao'] = $_POST['habilitacao'];
    }else{
        $cadastro['habilitacao'] = '';
    }
    
}

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
    



