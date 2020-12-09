<?php
    $ID_usuario = $_POST['ID'];
    $Password_us = $_POST['Password'];

    $conectar = include 'Conexion.php';
    $sqlborar= "DELETE FROM tbl_login";
    $ejecutar = mysqli_query($conectar, $sqlborar);

    $sqlinsertar= "INSERT INTO tbl_login VALUES('$ID_usuario',
                                          '$Password_us')";

    $ejecutar = mysqli_query($conectar, $sqlinsertar);

    if(!$ejecutar){
        header("location:Error.html");
    }else{
        $consulta_Est = "SELECT * FROM tbl_estudiante WHERE ID_Estudiante = '$ID_usuario' and Password_Est= '$Password_us'";
        $resultado = mysqli_query($conectar, $consulta_Est);
        //validar
        $filas_Est = mysqli_num_rows($resultado);
        if($filas_Est>0){
            header("location:Ingreso Exitoso.html");
        }else{
            $consulta_Doc = "SELECT * FROM tbl_docente WHERE ID_Docente = '$ID_usuario' and Password_Doc= '$Password_us'";
            $resultado = mysqli_query($conectar, $consulta_Doc);
            $filas_Doc = mysqli_num_rows($resultado);
            if($filas_Doc>0){
                header("location:Ingreso Docente.html");
            }else{
                header("location:Error.html");
                }
            }
        }
?>