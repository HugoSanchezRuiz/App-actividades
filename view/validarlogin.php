<?php
$mail = $_POST['correo_usuario'];
$password = $_POST['contra_usuario'];

if (!empty($mail) && !empty($password)) {
    
    include "./conexion.php";

    $consulta = "SELECT * FROM tbl_usuario WHERE correo_usuario = '{$mail}' AND contra_usuario = '{$password}'";

    $validacion = mysqli_query($conexion, $consulta);

    $rowuser = $validacion -> num_rows;

    if ($rowuser==1) {
        session_start();

        foreach ($validacion as $key => $usuario) {
            $_SESSION['correo_usuario'] = $usuario['correo_usuario'];
            $_SESSION['contra_usuario'] = $usuario['contra_usuario'];
            $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
        }

    } 
    header ('Location: ../index.html') ;
}
