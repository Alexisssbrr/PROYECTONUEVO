<?php
$con = new mysqli("localhost", "root", "", "verynice", 33065);

if(!isset($_GET['ID'])){
    exit('No hay id');
}
$ID=$_GET['ID'];
$stmt=$con->prepare('DELETE FROM catalogo WHERE ID=?');
$stmt->bind_param('i',$ID);
$stmt->execute();

header("location:crudcatalogo.php");
//var_dump($_GET) ;


?>