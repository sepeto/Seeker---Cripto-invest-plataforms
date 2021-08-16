//valores iniciales
var beneficioarbistar = 9;
var inversion= 1000; 
var arbistar= (9+100)/100;
var mindcapital=1.12;

var duracion=12;
var plazos=[];
btcgrow=1;

console.log('valores iniciales: Beneficio plataforma1= '+arbistar+', Beneficio plataforma2= '+mindcapital)
console.log('duración = '+duracion+ ' inversion= '+inversion);


// Generamos grafica con los elementos seleccionados partir de cualquier cambio en el formulario
$(document).ready(function(){
    
    $('#seleccion').change(function(){
        valoresgrafica();
        creargrafica()

        console.log('valores actuales: inversion= '+inversion+', Beneficio plataforma1= '+arbistar+', Beneficio plataforma2= '+mindcapital)
        console.log('duración = '+duracion);        

    });
})       



