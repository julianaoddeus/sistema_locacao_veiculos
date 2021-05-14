
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



function AssociaInput(){

     $.ajax({
         url : "function.php",
         type : 'get',
         data : {
              modelo : document.querySelector("#modelo").value,
         }
    })
    .done(function(desc_modelo){
         
         document.querySelector("#cor").innerHTML = desc_modelo;
    })
 }
