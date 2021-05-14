
function ConsultarModelos(){

    $.ajax({
        url : "modelos.php",
        type : 'get',
        data : {
             marca : document.querySelector("#marca").value,
        }
   })
   .done(function(opcoes_modelo){
        
        document.querySelector("#modelo").innerHTML = "<option selected>Escolha o modelo</option>"+ opcoes_modelo;
   })
}


