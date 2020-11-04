<?php
require 'conexion.php';

$respuesta = array(
    'encontrados' => 0,
    'mensaje' => '',
    'municipios' => array()
);

if(!empty($_GET['id_estado'])){
    $id_estado = $_GET['id_estado'];

    $sql = "select * from municipios where id_estado = $id_estado";
    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        $encontrados = mysqli_num_rows($resultado);

        if($encontrados > 0){
            $respuesta['encontrados'] = $encontrados;

            $municipios = array();
            while($fila = mysqli_fetch_assoc($resultado)){
                $municipios[] = array(
                    'id' => $fila['id'],
                    'nombre' => $fila['municipio']
                ); //push
            }

            $respuesta['municipios'] = $municipios;
        }
    }else{
        $respuesta['mensaje'] = 'Error en la consulta de los municipios';
    }
}

header('content-type: application/json');
echo json_encode($respuesta);