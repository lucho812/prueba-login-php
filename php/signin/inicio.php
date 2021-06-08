<?php 

    include '../conexion.php';
    session_start();
    $usuario = $_POST['user']; 
    $contrasena = $_POST['pass'];
    $contrasenaEncriptada = sha1(md5($contrasena));

    $query = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$usuario' and pass = '$contrasenaEncriptada' AND rol = 'Admin'");

    if($query){
        $num_resultados = mysqli_num_rows($query);
        if($num_resultados == 1){
            $filas = mysqli_fetch_array($query);
            $_SESSION['Admin'] = $filas['email'];
            echo "<script>window.location.href='../../pages/usuario.php'</script>";
        }else{
            echo "<script>window.location.href='../../index.php?datosIncorrectos=true'</script>";
        }
    }else{
        echo 'Falló la consulta';
    }

?>