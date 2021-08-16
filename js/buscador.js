//Cambiamos buscador-> listamos con filtros.php donde listaremos en tiempo real segun buscador, filtros y ordenar
$(document).ready(function(){
    $('#search').focus();
    $('#search').on('keyup',function(){
        var search = $('#search').val();
        var modelo = $('#modelo').val();
        var ordenar = $('#ordenar').val();
        console.log('Buscando por palabras o letras clave... parametros pasados por ajax: '+search+', '+ modelo +', '+  ordenar);
       $.ajax({
            url:'bd/filtrando.php',
            type:'POST',       
            data:{search:search, modelo:modelo, ordenar:ordenar}

        })   

        .done(function(response){
          $("#plataformas").html(response);
          console.log("peticion ajax con exito, buscar por letras o palabras clave completado");   
        })
    
        .fail(function(){
            alert('ajax fail');
        });
    
        


    });

}) 
