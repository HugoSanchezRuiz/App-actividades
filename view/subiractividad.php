<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <title>Subir Actividades</title>
</head>
<body style="background-color: rgb(4, 92, 27);">
     <!-- Subir Actividad -->

     <form action="./insertarmisactividades.php" method="post" class="subir">
        <h1 class="titulo padding-top">Registro Actividad</h1>

        <div class="input-group input-group-sm mb-3 padding-left padding-top2 padding-right">
            <input type="text" name="nombre_actividad" placeholder="Nombre" class="form-control" id="inputGroup-sizing-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <br>
        <br>
        <div class="input-group input-group-sm mb-3 padding-left padding-right">
            <textarea name="desc_actividad" id="inputGroup-sizing-sm" class="form-control" placeholder="Descripción" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <br>
        <div class="input-group input-group-sm mb-3 padding-left padding-right">
            <input type="text" name="lugar_actividad" placeholder="Lugar" aria-describedby="inputGroup-sizing-sm" class="form-control" id="inputGroup-sizing-sm" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <br>
        <br>
        <div class="padding-left0 padding-bottom">
            <button type="submit" value="enviar" class="btn btn-success">Subir</button>
            
        </div>

    </form>
</body>
</html>