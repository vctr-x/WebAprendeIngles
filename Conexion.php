<?php
    $conectar=mysqli_connect('localhost:3306','root','');
    
    if(!$conectar){
        echo "No se pudo conectar con el servidor";
    }else{
        $base=mysqli_select_db($conectar, 'ingles_web');
        if(!$base){
            echo "No se encontro la base de datos";
        }
    }
    return $conectar;
?>