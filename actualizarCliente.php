<?php 
     $db = new PDO('mysql:host=localhost;dbname=ejecrud1', 'root', '');

     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


    $id = $_POST['ID'];
   $nombre =$_POST['Nombre'];
   $apellido =$_POST['Apellido'];
   $correo =$_POST['Correo'];

    $db->query("UPDATE data_personas SET nombre = '$nombre', apellido = '$apellido', correo_electronico = '$correo' WHERE id ='$id'");
    header('location: index.php');
?>