<?php
    $conectar = include 'Conexion.php';

    $sqlT0001= "SELECT * FROM tbl_temas WHERE ID_Tema = 'TNB_0024'";
    
    $ejecutarT0001= mysqli_query($conectar, $sqlT0001);

    if(!$ejecutarT0001){
        header("location:Error.html");
    }else{
        while($rowT0001 = $ejecutarT0001->fetch_array()){
            $T00024 = $rowT0001['DescrTema'];
            return $T00024;
        }
    }
?>