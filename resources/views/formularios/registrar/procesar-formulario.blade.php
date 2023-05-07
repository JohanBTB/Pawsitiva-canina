<?php
require_once 'config/web.php';
// Conexión a la base de datos
$database = config('database');
$dbhost = config('dbhost');
$dbuser = config('dbuser');
$dbpassword = config('dbpassword');


$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$edad = $_POST['edad'];
$distrito = $_POST['distrito'];
$numero_telefonico = $_POST['numero_telefonico'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
$foto = $_FILES['foto']['name'];

// Preparar la consulta para insertar los datos en la base de datos
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, edad, distrito, numero_telefonico, contraseña, foto) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $nombre, $correo, $edad, $distrito, $numero_telefonico, $contraseña, $foto);

// Ejecutar la consulta y verificar si fue exitosa
if ($stmt->execute() === TRUE) {
    echo "Los datos fueron guardados correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$stmt->close();
$conn->close();
header("Location: registrar.php");
exit();
?>
?>
