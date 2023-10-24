<?php
$user = $_POST['user'];
$password = $_POST['password'];

$con = new mysqli("localhost", "root", "", "verynice", 33065);

if ($con->connect_error) {
    die("LA CONEXION SE HA PERDIDO" . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM datos WHERE user = ?");
    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();

        if (password_verify($password, $data['password'])) {
            echo "<h2>Se ha iniciado sesión correctamente</h2>";
        } else {
            echo "<h2>El correo o la contraseña son inválidos</h2>";
        }
    } else {
        echo "<h2>El correo o la contraseña son inválidos</h2>";
    }
}
?>