<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

// Verificar si se realizó la conexión
if ($conexion->connect_error) {
  die("Conexión fallida: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$usuario = $_POST['usuario'];
$nueva_contrasena = $_POST['nueva_contrasena'];

// Validar los datos de entrada
if(empty($usuario) || empty($nueva_contrasena)) {
  echo "Por favor, complete todos los campos.";
} else {
  $sql = "SELECT usuario FROM prueba WHERE usuario='$usuario'";
  $result = $conexion->query($sql);
  
  if($result->num_rows == 0) {
    echo "No se encontró el usuario en la base de datos.";
  } else {
    // Actualizar la contraseña del usuario en la base de datos
    $sql = "UPDATE prueba SET pass='$nueva_contrasena' WHERE usuario='$usuario'";
    if($conexion->query($sql) === TRUE) {
      header('location: inicioSesion.html');

    } else {
      echo "Error al actualizar la contraseña: " . $conexion->error;
      header('location: errorSesion.html');

    }
  }
}


// Cerrar la conexión a la base de datos
$conexion->close();
