//Funcion para crear las graficas que hayamos marcado
function creargrafica(){   
    //vaciamos los datos de las graficas del array y los llenamos solo con los checks activos
    datasets=[];

    

    if($('#plat1').prop('checked'))
        datasets.push(dataset1);
    if ($('#plat2').prop('checked'))
        datasets.push(dataset2);
    if ($('#plat3').prop('checked'))
        datasets.push(dataset3);
    if ($('#plat4').prop('checked'))
        datasets.push(dataset4);
        
            //Aociamos la variable al cambas y generamos la gráfica a partir de los valores de datasets con cada una de las 4 graficas selccionadas
           var ctx = document.getElementById('myChart').getContext('2d');
           var chart = new Chart(ctx, {
           // Grafica de tipo lineal
           type: 'line',
           // Valores de la gráfica
           data: {
            labels: plazos,
               datasets:  
                   datasets  
           },
           // Opciones opcionales de la grafica
           options: {}
       });
       
}

// volvemos a calcular todos los parametros que influyen en la grafica
function valoresgrafica(){
    
    duracion=$('#tiempo').val();
    inversion=$('#inversion').val();
    //calculamos el tanto por 1 que se revaloriza cada mes cada plataforma+
    arbistar=((100+parseInt($('#valor1').val()))/100);
    mindcapital=((100+parseInt($('#valor2').val()))/100);

    //calculamos el crecimiento del bitcoin en cada etapa haciendo una raiz a la N.plazos de su revalorizacion
    btcgrow = Math.pow(  $('#valuecoin2').val()/$('#valuecoin1').val()  ,1/duracion);

//calculamos los rendimientos anuales sin reinvertir (lineal) y reinvirtiendo (compuesto)
    arbistarlineal= lineal(inversion,arbistar);
    arbistarcompuesto = compuesto(inversion,arbistar)
    mindlineal= lineal(inversion,mindcapital);
    var mindcompuesto= compuesto(inversion,mindcapital);

    dataset1 = {
                label: 'Nimbus Lineal',
                backgroundColor: 'rgba(255, 99, 132,0.5)',
                borderColor: 'rgb(255, 99, 132)',
                data: arbistarlineal
            }
    dataset2 = {
                label: 'Nimbus Compuesto',
                backgroundColor: 'rgba(0, 100, 255,0.5)',
                borderColor: 'rgb(0, 99, 132)',
                data: arbistarcompuesto
            }
     dataset3 = {
                label: 'Mind Capital Lineal',
                backgroundColor: 'rgba(0, 50, 0,0.5)',
                borderColor: 'rgb(255, 99, 132)',
                data: mindlineal
            }
    dataset4 = {
                label: 'Mind Capital Compuesto',
                backgroundColor: 'rgba(0, 160, 0,0.5)',
                borderColor: 'rgb(0, 99, 132)',
                data: mindcompuesto
            }  
}

//funcion para calcular el beneficio con interes compuesto a partir de la inversion y el rendimiento de una plataforma
function compuesto(inversion,rendimiento){
    var data=[];
    plazos=[0];
    var data=[inversion];

   for (i=1; i<duracion;i++){
        data.push(data[i-1]*rendimiento*btcgrow);
        plazos.push(i);
     }
    return data;
}

//funcion para calcular el beneficio con interes lineal a partir de la inversion y el rendimiento de una plataforma
function lineal(inversion,rendimiento){
    var data=[0];
    var data=[inversion];
    for (i=1; i<duracion;i++){
       var add = (parseInt(data[i-1])+((inversion*rendimiento)-inversion))*btcgrow;
    data.push(add);
     }
    return data;
}


$(document).ready(function(){
    $('#valuecoin1').change(function(){
        $('#coinvalue').val($('#valuecoin2').val()/$('#valuecoin1').val())
        //##########falta incluir caso decrecimiento
        btcgrow = Math.pow(  $('#valuecoin2').val()/$('#valuecoin1').val()  ,1/12); 
        alert ('la revalorizacion mensual del btc es de :'+btcgrow.toFixed(2)*100+' %');
    })
})

$(document).ready(function(){
    $('#valuecoin2').change(function(){
        $('#coinvalue').val($('#valuecoin2').val()/$('#valuecoin1').val())
        //################falta incluir caso decrecimiento
        $('#reval').text($('#valuecoin2').val()/$('#valuecoin1').val());
        btcgrow = Math.pow(  $('#valuecoin2').val()/$('#valuecoin1').val()  ,1/12); 
        alert ('la revalorizacion mensual del btc es de :'+btcgrow.toFixed(2)*100+' %');
    })
})

$(document).ready(function(){
    $('#coinvalue').change(function(){
        if ($(this).val()>=1){
            $('#valuecoin2').val($(this).val()*$('#valuecoin1').val());
            $('#reval').text($(this).val());
        }
        else if ($(this).val()<=-1){
            $('#valuecoin2').val($('#valuecoin1').val()/-$(this).val());
            $('#reval').text($('#valuecoin2').val()/$('#valuecoin1').val());
        }

        //#################falla al recalcular con el valor de range
        btcgrow = Math.pow(  $('#valuecoin2').val()/$('#valuecoin1').val()  ,1/duracion); 
        alert ('la revalorizacion mensual del btc es de :'+btcgrow.toFixed(2)*100+' %');
    })
})


/*  CREANDO GRAFICA DE BARRAS PARA COMPARAR LAS CARACTERISTICAS GLOBALES
function graficabarras(){   
    var ctx2 = document.getElementById('myChart2').getContext('2d');
    var myBarChart = new Chart(ctx2, {
        type: 'bar',
        data:{datasets: [10, 20, 30, 40, 50, 60, 70]},
        options: options
    });
}

*/