<?php
    $conectar = include 'Conexion.php';
    
    $sqlT0001= "SELECT * FROM tbl_temas WHERE ID_Tema = 'TNI_0019'";
    
    $ejecutarT0001= mysqli_query($conectar, $sqlT0001);

    if(!$ejecutarT0001){
        header("location:Error.html");
    }else{
        while($rowT0001 = $ejecutarT0001->fetch_array()){
            $T0001Desc = $rowT0001['DescrTema'];
            return $T0001Desc;
        }
    }
?>