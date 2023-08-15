<?php

    session_start();

    include("../../../php/conexionDB.php");

    $emailUser = $_POST['Correo'];
    $passwordUser = $_POST['Contrasena'];

    $login = mysqli_query($conexionDB, "SELECT * FROM userfit WHERE emailUser='$emailUser' and passwordUser='$passwordUser'");
    
    if ($login) {
        $_SESSION['nameUser'] = $emailUser;
        header("location: ../../Users/Admin/admin.php");
        exit;
    }else{
        echo '<script>
                alert("El usuario no fue encontrado");
                window.location = "../login.php";
            </script>';
            exit;
    }
?>