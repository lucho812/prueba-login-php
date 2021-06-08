<?php

    include '../conexion.php';

    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $confirmar_clave = $_POST['confirmar_clave'];

    if($clave == $confirmar_clave){
        $clave_encriptada = sha1(md5($clave));
        $query = mysqli_query($conn, "INSERT INTO usuario (email,pass,rol) VALUES ('$email','$clave_encriptada','Admin')");
        if($query){
            echo "<script>window.location.href='../../index.php?registroExitoso=true'</script>";
        }else{
            echo "<script>window.location.href='../../index.php?registroExitoso=false'</script>";
        }
    }else{
        echo "<script>window.location.href='../../index.php?claveDiferente=true'</script>";
    }

?>