<?php 
    include 'services.php';
    $clientes= $db->query("SELECT * FROM data_personas")->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ver</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Tabla clientes</h1>
        </div>
        <table class="table table-secondary"> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CORREO</th>
                    <th colspan="2">OPCIONES</th>
                </tr>
            </thead>
            <?php foreach ($clientes as $cliente): ?> 
                <tr>
                    <td><?php echo $cliente->id?></td>
                    <td><?php echo $cliente->nombre?></td>
                    <td><?php echo $cliente->apellido?></td>
                    <td><?php echo $cliente->correo_electronico?></td>
                    <td><a href="controller.php?id=<?php echo $cliente->id?>&operation=eliminarCliente">Eliminar </a></td>
                    <td><a href="actualizar.php?id=<?php echo $cliente->id?>">Actualizar </a></td>
                </tr>
            <?php endforeach; ?>      
        </table><br>
        <a href="formulariocliente.php" class="btn btn-primary" type="buttom">nuevocliente</a>

    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>