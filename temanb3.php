<?php
    $conectar = include 'Conexion.php';

    $sqlNB001= "SELECT * FROM tbl_temasnuevo WHERE ID_Temanuevo = 'NB_0003'";
    
    $ejecutarNB001= mysqli_query($conectar, $sqlNB001);

    if(!$ejecutarNB001){
        header("location:Error.html");
    }else{
        while($rowNB001 = $ejecutarNB001->fetch_array()){
            $NB001 = ['Nuevo'];
            return $NB001;
        }
    }
?>