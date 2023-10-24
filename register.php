<?php
$con = new mysqli("localhost", "root", "", "verynice", 33065);

if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}

$user = $_POST['user'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$confpassword = $_POST['confpassword'];

$checkUserQuery = "SELECT * FROM datos WHERE user = '$user'";
$result = $con->query($checkUserQuery);

if ($result->num_rows > 0) {
    echo "El usuario ya existe. Por favor, elige otro nombre de usuario.";
} elseif (password_verify($confpassword, $password)) {


    $sql = "INSERT INTO datos (user, password) VALUES ('$user', '$password')";

    if ($con->query($sql) === TRUE) {
        echo "REGISTRO EXITOSO";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
}

$con->close();
?>
