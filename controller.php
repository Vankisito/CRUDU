<?php 
    include 'services.php';
    $operation =$_REQUEST['operation'];

    switch ($operation){

        case 'guardarCliente':
            $nombre =$_POST['Nombre'];
            $apellido =$_POST['Apellido'];
            $correo =$_POST['Correo'];
            $db->query("INSERT INTO data_personas VALUES(null, '$nombre', '$apellido','$correo')");
            header('location: index.php');
            break;

        case 'eliminarCliente':
            $id=$_GET['id'];
            $db->query("DELETE FROM data_personas WHERE id = $id ");
            header('location: index.php');
            break;

        case 'actulizarCliente':
            $id = $_POST['ID'];
            $nombre =$_POST['Nombre'];
            $apellido =$_POST['Apellido'];
            $correo =$_POST['Correo'];
            $db->query("UPDATE data_personas SET nombre = '$nombre', apellido = '$apellido', correo_electronico = '$correo' WHERE id ='$id'");
            header('location: index.php');
            break;

        default:
            break;
    }   

?>