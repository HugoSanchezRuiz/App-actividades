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
        

        
        $nombre_actividad = $_POST['nombre_actividad'];
        $desc_actividad = $_POST['desc_actividad'];
        $lugar_actividad = $_POST['lugar_actividad'];
        $path=date('h-i-s-j-m-y')."-".$_FILES['foto_actividad']['name'];     
        if (move_uploaded_file($_FILES['foto_actividad']['tmp_name'],'../img/'.$path)) {
            $sql = "INSERT INTO `tbl_actividad` (`nombre_actividad`,`desc_actividad`, `lugar_actividad`,`foto_actividad`) VALUES ('$nombre_actividad','$desc_actividad','$lugar_actividad','$path')";
            $insert = mysqli_query($conexion, $sql);
        }

    ?>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function aviso(url) {
            Swal.fire({
                    title: 'Actividad creada',
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

        aviso('./nosotros.php');
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</body>
</html>