<?php
    $conectar = include 'Conexion.php';

    $sql= "SELECT * FROM tbl_login";
        
    $ejecutar= mysqli_query($conectar, $sql);

    if(!$ejecutar){
        header("location:Error.html");
    }else{
        while($row = $ejecutar->fetch_array()){
            $usuario = $row['ID_usuario'];
            return $usuario;
        }
    }
?>