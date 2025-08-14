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

$turno = $_POST['turno'];
$aula = $_POST['aula'];
$labs = $_POST['labs'];
$dia = date("Y-m-d");
if (!isset($_SESSION['RM'])) {
    $usuario = 0;
 }
 else {
    $usuario = $_SESSION['RM'];
 }

$stmt = "SELECT * FROM Agendamento WHERE Turno = '$turno' AND Aula = '$aula' AND Idlab = $labs";


$result = mysqli_query($conn, $stmt);

if (mysqli_num_rows($result) > 0) {
    echo" <script> alert('Horário não disponível!');
          window.location.href = 'labs-form.php' </script>";
}else{
    $sql = "INSERT INTO Agendamento (Turno, Aula, Idlab, Dia, RM) VALUES ('$turno', '$aula', '$labs', '$dia', '$usuario');";
    
    $result = mysqli_query($conn, $sql);

    echo"<script> window.location.href = 'labs-form.php' </script>";
}



$conn->close();
?>

