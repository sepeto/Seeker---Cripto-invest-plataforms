<?php

class plataforma{
    public $id;
    public $nombre;
    public $descripcion;
    public $modelo;
    public $beneficio;
    public $ubicacion;
    public $ceo;
    public $min;
    public $val;
    public $inicio;
    public $inv;
    public $pago;
    
    public $fechapublicacion;

    public function __construct($nombre,$descripcion,$modelo,$beneficio){
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->modelo=$modelo;
        $this->beneficio=$beneficio;
    }

}

?>