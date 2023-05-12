<?php 
 $db = new PDO('mysql:host=localhost;dbname=ejecrud1', 'root', '');

 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);


$id=$_GET['id'];
$db->query("DELETE FROM data_personas WHERE id = $id ");
header('location: index.php');
?>