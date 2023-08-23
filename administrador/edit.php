<?php
$conexion = mysqli_connect("localhost", "root", "", "base");

if (isset($_POST['edit'])) {
        $usuarioU = $_POST['usuarioN'];
        $nombreU = $_POST['nombreN'];
        $telefonoU = $_POST['telefonoN'];
        $fechaU = $_POST['fechaN'];
        $domicilioU = $_POST['domicilioN'];
        $adopcionU = $_POST['adopcionN'];
        $notificacion = "Su solicitud esta en revisión";
        $color = "alert-warning";
        $men1 = "Su formulario se ha enviado correctamente, por lo que solo debe esperar a que se comuniquen con usted de acuerdo a los datos que proporciono en el formulario.";

        $query = 'UPDATE formulario SET
        usuario = "' . $usuarioU . '" ,
        nombre ="' . $nombreU . '" ,
        telefono="' . $telefonoU . '", 
        fechaN="' . $fechaU . '",
        domicilio="' . $domicilioU . '",
        adopcion="' . $adopcionU . '",
        notificacion="' . $notificacion . '",
        color="' . $color . '",
        men1="' . $men1 . '"
        WHERE usuario="' . $usuarioU . '" and adopcion="' . $adopcionU . '" ';

        $resultado = mysqli_query($conexion, $query);
        header('location: menuN.php');


}

?>