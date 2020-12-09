<?php
    $conectar = include 'Conexion.php';
    
    $sqlAva= "SELECT * FROM tbl_nivel WHERE ID_Nivel = 'NV_03'";
    
    $ejecutarAva= mysqli_query($conectar, $sqlAva);

    if(!$ejecutarAva){
        header("location:Error.html");
    }else{
        while($rowAva = $ejecutarAva->fetch_array()){
            $AvanzadoDesc = $rowAva['Descripcion_Nivel'];
            return $AvanzadoDesc;
        }
    }
?>