<?php
    $conectar = include 'Conexion.php';

    $sqlNI001= "SELECT * FROM tbl_temasnuevo WHERE ID_Temanuevo = 'NI_0001'";
    
    $ejecutarNI001= mysqli_query($conectar, $sqlNI001);

    if(!$ejecutarNI001){
        header("location:Error.html");
    }else{
        while($rowNI001 = $ejecutarNI001->fetch_array()){
            $NI001Desc = $rowNI001['DescrTemaNuevo'];
            return $NI001Desc;
        }
    }
?>