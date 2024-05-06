<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost:8080";
$username = "root";
$password = "";
$dbname = "formularioh";

$conn = new mysqli($servername,$username,$password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$envase = $_POST["envase"];

// Insert the envase value into the database
$sql = "INSERT INTO clientes (envase) VALUES ('$envase')";

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$codigo = $_POST['codigo'];
$pago = $_POST['pago'];


$sabores = "";
foreach ($_POST as $key => $value) {
  if ($key === "sabores") {
    $sabores .= $value . ", ";
  }
}

// Eliminar la coma final
$sabores = rtrim($sabores, ", ");

// Insertar los valores de sabores en la base de datos
$sql = "INSERT INTO clientes (sabores) VALUES ('$sabores')";
// Insertar datos en la base de datos
$sql = "INSERT INTO clientes (nombre, apellidos, correo, direccion, telefono, codigo, pago, envase, sabores)
        VALUES ('$nombre', '$apellidos', '$correo', '$direccion', '$telefono', '$codigo', '$pago', '$envase', '$sabores')";



// Cerrar la conexión
$conn->close();
?>

