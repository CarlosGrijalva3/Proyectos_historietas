<?php
    $conexion = new mysqli("localhost","root","","publicaciones");
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conecion";
    }

?>