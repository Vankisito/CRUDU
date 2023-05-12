<?php 
    $db = new PDO('mysql:host=localhost;dbname=ejecrud1', 'root', '');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);



$id=$_GET['id'];
$cliente= $db->query("SELECT * FROM data_personas WHERE id= $id")->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <form action="actualizarCliente.php" method="post">
        <div class="mb-3">
            <label for="ID" class="form-label">Id</label>
            <input type="text" class="form-control" id="ID" placeholder="Id..." readonly name="ID" value="<?php echo $cliente->id?>">
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Nombre..." required name="Nombre" value="<?php echo $cliente->nombre?>">
        </div>
            <div class="mb-3">
            <label for="Apellido" class="form-label">Apeliido</label>
            <input type="text" class="form-control" id="Apellido" placeholder="Apellido..." required name="Apellido" value="<?php echo $cliente->apellido?>">
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="Correo" placeholder="Correo..." required name="Correo" value="<?php echo $cliente->correo_electronico?>">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>