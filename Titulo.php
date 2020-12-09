<?php
    $conectar = include 'Conexion.php';

    $sqlT0001= "SELECT * FROM tbl_Recurso WHERE ID_Recurso = 'RB_001'";
    
    $ejecutarT0001= mysqli_query($conectar, $sqlT0001);

    if(!$ejecutarT0001){
        header("location:Error.html");
    }else{
        while($rowT0001 = $ejecutarT0001->fetch_array()){
            $tituloteo = $rowT0001['TituloRecurso'];
            return $tituloteo;
        }
    }
?>