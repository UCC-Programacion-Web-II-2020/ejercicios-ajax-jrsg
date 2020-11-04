<?php
$conexion = mysqli_connect('localhost', 'root', '', 'mi_sistema');

if($conexion == false){
    echo mysqli_connect_error();
    exit;
}

mysqli_set_charset($conexion, 'UTF-8');