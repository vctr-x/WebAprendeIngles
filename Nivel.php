<?php
    $conectar = include 'Conexion.php';
    $usuario = include 'usuario.php';
    
    $sql= "SELECT * FROM tbl_estudiante WHERE ID_Estudiante = $usuario";
    
    $ejecutar= mysqli_query($conectar, $sql);

    if(!$ejecutar){
        header("location:Error.html");
    }else{
        while($row = $ejecutar->fetch_array()){
            $Nivel = $row['Nivel_Est'];
            return $Nivel;
        }
    }
?>