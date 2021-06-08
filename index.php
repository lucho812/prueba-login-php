<?php
    session_start();

    if(isset($_SESSION['Admin'])){
        echo "<script>window.location.href='pages/usuario.php'</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
							
		<div class="white-panel">
			<form action="php/signin/inicio.php" method="post">
                <div class="login-show">
                    <h2>LOGIN</h2>
                    <input type="text" placeholder="Email" name="user">
                    <input type="password" placeholder="Password"  name="pass">
                    <input type="submit" value="Login"><br>
                    <h2>
                        <?php 
                            if(isset($_GET['datosIncorrectos'])){
                                $falloInicio = $_GET['datosIncorrectos'];
                                if($falloInicio == true){
                                    echo 'Datos incorrectos';
                                }
                            }
                            if(isset($_GET['registroExitoso'])){
                                $registroExitoso = $_GET['registroExitoso'];
                                if($registroExitoso == true){
                                echo 'Registro exitoso';
                                }else if($registroExitoso == true){
                                    echo 'Ocurrió un error al registrar';
                                }
                            }
                            if(isset($_GET['claveDiferente'])){
                                $claveDiferente = $_GET['claveDiferente'];
                                if($claveDiferente == true){
                                    echo 'Las contraseñas no coinciden';
                                }
                            }
                        ?>
                    </h2>
                </div>
            </form>
            <form action="php/signup/registro.php" method="post">
                <div class="register-show">
                    <h2>REGISTER</h2>
                    <input type="text" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="clave">
                    <input type="password" placeholder="Confirm Password" name="confirmar_clave">
                    <input type="submit" value="Register">
                </div>
            </form>
		</div>
	</div>

</body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="main.js"></script>
</html>