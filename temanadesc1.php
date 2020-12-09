<?php
    $conectar = include 'Conexion.php';
    
    $sqlNA001= "SELECT * FROM tbl_temasnuevo WHERE ID_Temanuevo = 'NA_0001'";
    
    $ejecutarNA001= mysqli_query($conectar, $sqlNA001);

    if(!$ejecutarNA001){
        header("location:Error.html");
    }else{
        while($rowNA001 = $ejecutarNA001->fetch_array()){
            $NA001Desc = $rowNA001['DescrTemaNuevo'];
            return $NA001Desc;
        }
    }

?>