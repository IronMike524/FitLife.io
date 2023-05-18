<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "Miguel";
$password = "Miguel";
$database = "usuarios";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Procesar los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Ejecutar una consulta SQL para insertar los datos en la base de datos
$sql = "INSERT INTO users (Nombre, Apellido, Celular, Correo, Edad, Contrasena)
        VALUES ('$nombre', '$apellido', '$celular', '$correo', '$edad', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
