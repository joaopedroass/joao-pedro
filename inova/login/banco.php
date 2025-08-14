<?php
session_start();
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "inova";

$conn = new mysqli($host,$usuario,$senha,$banco);

if($conn -> connect_error) {
    die("Conexão falhou" . $conn -> connect_error);
}

$CodigodaEscola = $_POST['CodigodaEscola'];
$RM = $_POST['RM'];
$Senha = $_POST['Senha'];

$stmt = "SELECT * FROM Usuario WHERE CodigodaEscola = '$CodigodaEscola' AND RM = '$RM' AND Senha = '$Senha'";
$result = mysqli_query($conn, $stmt);

if (mysqli_num_rows($result) > 0) {
    $reg = mysqli_fetch_object($result);
    $_SESSION['RM'] = $reg->RM;
    echo "<script> window.location.href = '../index/inicio.html' </script>";
}else{
    echo" <script> alert('Dados incorretos');
    window.location.href = 'login.php' </script>";
}

$conn->close();

?>

