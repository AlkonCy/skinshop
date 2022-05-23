<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: /admin/productos.php');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
            require_once "../config/conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$clave'");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id'] = $dato['id'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: productos.php');
            } else {
                $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Contraseña incorrecta
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                session_destroy();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" class="user" method="POST" action="" autocomplete="on">
					<span class="login100-form-title p-b-43">
					Panel Vendedor
						<?php echo (isset($alert)) ? $alert : ''; ?>
					</span>
                     <div class="wrap-input100 validate-input">
                    <input type="text" class="input100" id="usuario" name="usuario" placeholder="Usuario">
                    </div>
                    <div class="wrap-input100 validate-input">
					<input type="password" class="input100" id="clave" name="clave" placeholder="Contraseña">
                    </div>
                    <button class="container-login100-form-btn login100-form-btn"" >
                    Iniciar
					</button>
                    <hr>
                    </form>

				<div class="login100-more" style="background-image: url('/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Login By Andres Martinez - Skin Shop 
						Prohibida su copia
						</span>
					</div>

	
	

	<script src="/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/admin/vendor/animsition/js/animsition.min.js"></script>
	<script src="/admin/vendor/bootstrap/js/popper.js"></script>
	<script src="/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/admin/vendor/select2/select2.min.js"></script>
	<script src="/admin/vendor/daterangepicker/moment.min.js"></script>
	<script src="/admin/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="/admin/vendor/countdowntime/countdowntime.js"></script>
	<script src="/admin/js/main.js"></script>

</body>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/admin/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/admin/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="/admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="/admin/css/main.css">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>



</html>