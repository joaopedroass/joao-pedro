<?php
session_start();
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "inova";

$conn = new mysqli($host,$usuario,$senha,$banco);

$nomeResp= $_POST['nomeResp'];
$RG= $_POST['RG'];
$CPF= $_POST['CPF'];
$nomeAluno= $_POST['nomeAluno'];
$horario= $_POST['hora'];
$motivo= $_POST['motivo'];
$dia = date("Y-m-d");

if (!isset($_SESSION['RM'])) {
    $usuario = 0;
 }
 else {
    $usuario = $_SESSION['RM'];
 }

$stmt = "SELECT * FROM Permissao WHERE RM = '$usuario' AND dataSaida = '$dia'";
$result = mysqli_query($conn, $stmt);

if (mysqli_num_rows($result) > 0) {
    echo" <script> alert('Já enviado!');
          window.location.href = 'permissao-form.php' </script>";
}else {
        $ins = $conn->prepare("INSERT INTO Permissao (nomeResponsavel, rg, cpf, nomeAluno, dataSaida, horario, motivo, RM) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $ins->bind_param("ssssssss", $nomeResp, $RG, $CPF, $nomeAluno, $dia, $horario, $motivo, $usuario);
        $ins->execute();

        echo "ok";
        echo "<script> window.location.href = 'permissao-form.php'; </script>";
    }
?>