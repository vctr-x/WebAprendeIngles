<?php
    $conectar = include 'Conexion.php';
    
    $sqlInt= "SELECT * FROM tbl_nivel WHERE ID_Nivel = 'NV_02'";
    
    $ejecutarInt= mysqli_query($conectar, $sqlInt);

    if(!$ejecutarInt){
        header("location:Error.html");
    }else{
        while($rowInt = $ejecutarInt->fetch_array()){
            $Intermedio = $rowInt['Nombre_Nivel'];
            return $Intermedio;
        }
    }
?>