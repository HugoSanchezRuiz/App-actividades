<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Registro</title>
</head>
<body style="background-color: rgb(255, 255, 152);">

    <form action="./insertar.php" method="post" class="registro">
        <h1 class="titulo padding-top">Registro Usuario</h1>
        <br>
        <div class="input-group input-group-sm mb-3 padding-left padding-top2 padding-right">
            <input type="text" name="nombre_usuario" class="form-control"  placeholder="Nombre" id="inputGroup-sizing-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <br>
        <div class="input-group input-group-sm mb-3 padding-left padding-right">
            <input type="email" name="correo_usuario" class="form-control"  placeholder="Correo" id="inputGroup-sizing-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <br>
        <div class="input-group input-group-sm mb-3 padding-left padding-right">
            <input type="password" name="contra_usuario" class="form-control"  placeholder="Contraseña" sid="inputGroup-sizing-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <br>
        <div class="padding-left0 padding-bottom">
            <button type="submit" value="enviar" class="btn btn-info">Enviar</button>
        </div>
        <div class="padding-left6 padding-bottom">
            <button type="submit" value="gologin" onclick="window.location.href = '../view/login.html'" class="btn btn-warning">Volver Login</button>
        </div>
    </form>
    <!--<div class="card"></div>-->

</body>
</html>