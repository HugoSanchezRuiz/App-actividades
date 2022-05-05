<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>

    <?php

        include 'conexion.php';

        
        $nombre_usuario = $_POST['nombre_usuario'];
        $correo_usuario = $_POST['correo_usuario'];
        $contra_usuario = $_POST['contra_usuario'];   
        
        $correo_encontrado= false;
        //consulta de correo exitente
        $consulta = "SELECT correo_usuario FROM tbl_usuario";
        $correo= mysqli_query($conexion, $consulta);
        foreach ($correo as $key => $tabla) {
        foreach ($tabla as $atributo => $email) {
            if ($correo_usuario == $email){
                $correo_encontrado=true;
                }
            }
        }
        if (!$correo_encontrado){
            $sql = "INSERT INTO `tbl_usuario` (`nombre_usuario`,`correo_usuario`, `contra_usuario`) VALUES ('$nombre_usuario','$correo_usuario','$contra_usuario')";
            $insert = mysqli_query($conexion, $sql);
            ?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    function aviso(url) {
                        Swal.fire({
                                title: 'Usuario creado',
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Volver'
                            })
                            .then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = url;
                                }
                            })
                    }

                    aviso('./nosotros.html');
                </script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php
        }else {
            ?>

                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        function aviso(url) {
                            Swal.fire({
                                    title: 'Correo Existente',
                                    icon: 'error',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'Volver'
                                })
                                .then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = url;
                                    }
                                })
                        }

                        aviso('./registro.php');
                    </script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <?php                       
        }

    ?>

    
</body>
</html>