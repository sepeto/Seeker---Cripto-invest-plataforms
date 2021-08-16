<!doctype html >
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
     <input id="search" type="text" size="30" placeholder="Buscar por palabras">

        <form id="filtros"  method="POST" action="index.php" >
    
           
            <br>
            <select name="modelo" id="modelo">
               <option value="">Modelo de negocio </option>
               <option value="arbitraje">Trading arbitraje</option>
               <option value="masternodos">MasterNodos</option>
               <option value="defi">DeFI</option>     
               <option value="pool">Pool Minero</option>
               <option value="trading">CopyTrading</option>
            </select>

            <br>
            <select name="monitorizado" id="monitorizado">
               <option value="">Monitozización </option>
               <option value="bitacademy">Monitorizado Bitcoin Academy </option>
               <option value="comunidad">Seguimiento comunidad </option>
               <option value="no">Sin datos</option>
            </select>

            <br>
            <select name="pagos" id="pagos">
				<option value="todos">Automatizados</option>
				<option value="españa">Mensuales</option>
				<option value="pontevedra">Semanales</option>
            </select>
            <br>
            <select name="donde" id="donde">
               <option value="todos">Donde</option>
               <option value="españa">España</option>
               <option value="europa">Europa</option>
               <option value="fuera">Fuera de Europa</option>
            </select>
            <br>
            <br>
           
            <button  class="buttonform btn btn-primary" type="button" id="buscar" value="buscar">Comparar rendimientos</button>
        </form>


</body>