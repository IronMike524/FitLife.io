<!DOCTYPE html>
<html lang="en">
<head>
    <title>FitLife</title>
 <!-- Design by foolishdeveloper.com -->
 <!-- Modificado por: Miguel Vélez -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" href="../../img/Logo FL.png">
</head>
<body>
    <section class="login-register">

        <div class="container">
            <div class="box-back">
                <div class="box-back-login">
                    <h3>¿Ya tiene una cuenta?</h3>
                    <p>Inicia Sesion Para Conocer Mas Informacion</p>
                    <button id="btn-login">Iniciar Sesion</button>
                </div>
                <div class="box-back-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn-register">Registrase</button>
                </div>
            </div>
            
            <div class="container-login-register">
                <form action="PHP/login_user.php" method="POST" class="form-login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico" name="Correo">
                    <input type="password" placeholder="Contraseña" name="Contrasena">
                    <button>Iniciar Sesion</button>
                </form>

                <form action="PHP/register_user.php" method="POST" class="form-register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Ingrese Su Nombre" name="Nombre">
                    <input type="text" placeholder="Ingrese Su Correo" name="Correo">
                    <input type="password" placeholder="Ingrese Su Contraseña" name="Contrasena">
                    <input type="password" placeholder="Ingrese Nuevamente Su Contraseña" name="2Contra">
                    <button>Registrase</button>
                </form>
            </div>
        </div>

</section>

    <div class="division-opaca"></div>

    <section class="application">
    <div class="app-text">
        <h4>Descarga Nuestra Aplicación</h4>
        <h1><span>FIT</span>LIFE</h1>
        <p>Descarga hoy mismo y da el primer paso hacia una versión más saludable y feliz de ti mismo. Tu nuevo estilo de vida te está esperando.</p>
        <a href="#">¡Descárgala Ahora!</a>
    </div>
	
		<div class="app">
			<img src="../../img/Application.png" alt="">
			</div>
</section>

    <div class="division-opaca"></div>
    <?php
        include('../../includes/footer.html');
    ?>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="script.js"></script>
</body>
</html>

