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
</head>
<body>
    <main>

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
                <form action="" class="form-login">
                    <h2>Iniciar Sesion</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
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

    </main>
    <script src="script.js"></script>
</body>
</html>

