<?php

class conexion {
    
    private $enlace;
    
    public function __construct(){
    
    $this->enlace= new mysqli("localhost","root","","otomipedia");
    }
    
    public function getusuarios (){
    
    $consulta=$this->enlace->query("SELECT * FROM usuario");
    $resultados=[];
    
    for($i=0; $fila=$consulta->fetch_assoc(); $i++){
    
    $resultados[$i] = $fila;
    
    }
    
    return $resultados;
    
    }
    
    }



