<?php 

    //De esta forma nos estamos conectando a la base de datos
    include("../../../php/conexionDB.php");
    
    $idUser = idRandom(10);
    $nameUser = $_POST['Nombre'];
    $emailUser = $_POST['Correo'];
    $passwordUser = $_POST['Contrasena'];
    $confirmPass = $_POST['2Contra'];
    

    if ($confirmPass === $passwordUser) {
        $encripPass = password_hash($passwordUser, PASSWORD_DEFAULT);

        $query = "INSERT INTO userFit(idUser, nameUser, emailUser, passwordUser) 
                VALUES ('$idUser', '$nameUser', '$emailUser', '$encripPass')";
    }else{
        echo '<script>
                alert("Las Contraseñas No Coinciden");
                window.location = "../login.php";
            </script>';
    }

    $execute = mysqli_query($conexionDB ,$query);
    if ($execute ) {
        echo '<script>
                alert("Usuario Ingresado Correctamente");
                window.location = "../login.php";
            </script>';
    }

    mysqli_close($conexionDB);
    // Función para generar un ID aleatorio
    function idRandom($length) {
        // Define una cadena de caracteres que se utilizará para generar el ID aleatorio
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        // Obtiene la longitud de la cadena de caracteres
        $charactersLength = strlen($characters);
        // Inicializa una variable para almacenar el ID aleatorio
        $randomId = '';
        // Crea un bucle que se ejecutará $length veces (la longitud deseada para el ID)
        for ($i = 0; $i < $length; $i++) {
            // Genera un número aleatorio entre 0 y la longitud de la cadena de caracteres - 1
            $randomIndex = rand(0, $charactersLength - 1);
            // Concatena el carácter en la posición $randomIndex a la variable $randomId
            $randomId .= $characters[$randomIndex];
        }
        // Retorna el ID aleatorio generado
        return $randomId;
    }
    
?>