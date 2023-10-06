<?php

    session_start();

    if (!isset($_SESSION['nameUser'])) {
        echo '<script>
                alert("No se ha iniciado sesion");
            </script>';
            header("location: ../../Login/login.php");
            session_destroy();
            die();
    }

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("location: ../../../index.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrados FitLife</title>
    <link rel="stylesheet" href="css/styleAdmin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>
<body>
    <div class="sidebar">
        <div class="logo">FitLife</div>
        <ul class="menu">
            <li class="active">
                <a href="" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-user"></i>
                    <span>Usuarios</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-chart-bar"></i>
                    <span>Estadisticas</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-briefcase"></i>
                    <span>Carreras</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-question-circle"></i>
                    <span>Preguntas Hechas</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-star"></i>
                    <span>Comentarios</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fas fa-cog"></i>
                    <span>Configuracion</span>
                </a>
            </li>
            <li class="logout">
                <a href="#" onclick="document.getElementById('logoutForm').submit()">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Cerrar Sesión</span>
                </a>
                <form id="logoutForm" action="" method="post" style="display: none;">
                    <input type="hidden" name="logout" value="1">
                </form>
            </li>
        </ul>
    </div>
</body>
</html>