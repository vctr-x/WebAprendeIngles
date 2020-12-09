<?php
    $conectar = include 'Conexion.php';
    
    $sqlBas= "SELECT * FROM tbl_nivel WHERE ID_Nivel = 'NV_01'";
    
    $ejecutarBas= mysqli_query($conectar, $sqlBas);

    if(!$ejecutarBas){
        header("location:Error.html");
    }else{
        while($rowBas = $ejecutarBas->fetch_array()){
            $BasicoDesc = $rowBas['Descripcion_Nivel'];
            return $BasicoDesc;
        }
    }
?>