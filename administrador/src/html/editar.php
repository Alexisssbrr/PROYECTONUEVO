<?php 
$con = new mysqli("localhost", "root", "", "verynice", 33065);


$ID=$_POST['ID'];
$product=$_POST['product'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$talla=$_POST['talla'];

$stmt=$con->prepare("UPDATE catalogo SET
product=?,
precio=?,
descripcion=?,
talla=?
WHERE ID=?");

$stmt->bind_param('ssssi',$product,$precio,$descripcion,$talla, $ID);
$stmt->execute();
header("location:crudcatalogo.php");


?>