<?php 
     $db = new PDO('mysql:host=localhost;dbname=ejecrud1', 'root', '');

     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

   $nombre =$_POST['Nombre'];
   $apellido =$_POST['Apellido'];
   $correo =$_POST['Correo'];

    $db->query("INSERT INTO data_personas VALUES(null, '$nombre', '$apellido','$correo')");
    header('location: index.php');
?>