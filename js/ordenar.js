//Cambiamos orden-> listamos con filtros.php donde listaremos en tiempo real segun buscador, filtros y ordenar
 $(document).ready(function(){
        
         $('#ordenar').change(function(){
                 
                var search = $('#search').val();
                var modelo = $('#modelo').val();
                var ordenar = $('#ordenar').val();
                console.log('ordenando... parametros pasados por ajax: '+search+', '+ modelo +', '+  ordenar);
               $.ajax({
                    url:'bd/filtrando.php',
                    type:'POST',       
                    data:{search:search, modelo:modelo, ordenar:ordenar}
        
                })   
        
                .done(function(response){
                  $("#plataformas").html(response);
                  console.log("peticion ajax con exito, ordenar completado");   
                })
            
                .fail(function(){
                    console.log('ajax fail');
                });
            
                
        
        
            });
        
        }) 
        
