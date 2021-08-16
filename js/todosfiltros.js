function filtrar($search,$modelo,$orden){

    $servidor ="localhost";
    $username= "root";
    $password="";
    $nombrebd="inversiones";
    
    $bdatos = new accesobd($servidor,$username,$password,$nombrebd);
    $db= $bdatos->abrirConexion();

   $query= "select * from plataformas
                     where 
                        modelo like '%$modelo%' 
                        
                        and
                        nombre like '%$search%'
                     
                        order by inicio $orden " ;                     

    $res= $db->query($query);
    echo "el numero de registros es ".$res->num_rows;
    if($res->num_rows>0){
           while($fila = $res->fetch_assoc()){
            ?>

<div class="plat row">
                <h2> <?php echo $fila['nombre'] ?> </h2>
                <p class="periodos"> Periodo {24/10/2020} a {Activo} </P>
                <p> <?php echo $fila['descripcion'] ?>
                </p>
                <div class="row">
                    
                    <div class="datos col-xs-6">
                        <p><span>Modelo negocio:</span><?php echo $fila['modelo'] ?></p>
                        <p><span>Beneficio mensual:</span><?php echo $fila['beneficio'] ?></p>
                        <p><span>Sede Fiscal:</span>{España}</p>
                        <p><span>CEO:</span><?php echo $fila['ceo'] ?></p>
                        
                    </div>
                    <div class="datos col-xs-6 flexbox">
                    <p><span>Inversión mínima:</span><?php echo $fila['min'] ?></p>
                    <p><span>Moneda pagos/retiros:</span>{BTC}</p>
                    <p><span>Moneda inversión:</span>{Dólares:$}</p>
                    <p><span>Valoración BTCAcademy:</span><?php echo $fila['val'] ?></p>
                    
                    </div>
                </div>
                <div >
                    <button class="button"> ¿Necesitas una consultoria gratuita? </button>
                    <button class="button"> Información ampliada</button>
                        
                </div>
        </div>
    
            <?php 
        }

    }
}