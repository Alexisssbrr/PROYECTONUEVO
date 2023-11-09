<?php
$con = new mysqli ("localhost", "root", "", "verynice", 3307); 

if (isset($_POST['enviar'])) {
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $subject = $_POST['asunto'];
    $message = $_POST['mensaje'];


    $insertarcomentarios = $con->prepare("INSERT INTO comentarios (nombre, correo, asunto, mensaje) VALUES (?, ?, ?, ?)");
    $insertarcomentarios->bind_param("ssss", $name, $email, $subject, $message);
    $insertarcomentarios->execute();
    $insertarcomentarios->close();
}


?>