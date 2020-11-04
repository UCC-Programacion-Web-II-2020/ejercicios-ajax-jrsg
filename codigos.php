<?php
require 'conexion.php';

$respuesta = array(
    'encontrados' => 0,
    'mensaje' => '',
    'html' => ''
);

if(!empty($_GET['cp'])){
    $cp = trim($_GET['cp']);

    if(strlen($cp) == 5 && is_numeric($cp)){

        $sql = "select * from codigos_postales where cp = $cp";
        $resultado = mysqli_query($conexion , $sql);

        if($resultado){
            $encontrados = mysqli_num_rows( $resultado );

            if($encontrados > 0){
                $respuesta['encontrados'] = $encontrados;

                $html = '<table>
                            <tr>
                                <th>#</th>
                                <th>CP</th>
                                <th>Asentamiento</th>
                                <th>Municipio</th>
                            </tr>';

                $contador = 1;
                while($fila = mysqli_fetch_assoc($resultado)){
                    $codigo         = $fila['cp'];
                    $asentamiento   = $fila['asentamiento'];
                    $municipio      = $fila['municipio'];

                    $html .= "
                    <tr>
                        <td>$contador</td>
                        <td>$codigo</td>
                        <td>$asentamiento</td>
                        <td>$municipio</td>
                    </tr>";

                    $contador++;
                }

                $html .= '</table>';

                $respuesta['html'] = $html;
            }else{
                $respuesta['mensaje'] = 'No se encontró el código postal';
            }
        }else{
            $respuesta['mensaje'] = 'Error al realizar la consulta';
        }
    }else{
        $respuesta['mensaje'] = 'Escriba un código postal con 5 números';
    }
}else{
    $respuesta['mensaje'] = 'CP vacío';
}

header('content-type: application/json');
echo json_encode( $respuesta );