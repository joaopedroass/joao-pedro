<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "inova";

$conn = new mysqli($host,$usuario,$senha,$banco);

$confirmacao = $_POST['sim'];
$dia = date("Y-m-d");
if (!isset($_SESSION['RM'])) {
    $usuario = 0;
 }
 else {
    $usuario = $_SESSION['RM'];
 }

$stmt = "SELECT * FROM Confirmacao WHERE Confirmacao = '$confirmacao' AND dia = '$dia'";
$result = mysqli_query($conn, $stmt);

if (mysqli_num_rows($result) > 0) {
    echo" <script> alert('Já confirmado!');
          window.location.href = 'merenda-form.php' </script>";
}else {
    // Insere na tabela Merenda
    $sql = $conn->prepare("INSERT INTO Merenda (dia) VALUES (?)");
    $sql->bind_param("s", $dia);
    if ($sql->execute()) {
        // Insere na tabela Confirmacao
        $ins = $conn->prepare("INSERT INTO Confirmacao (confirmacao, dia, RM) VALUES (?, ?, ?)");
        $ins->bind_param("ssi", $confirmacao, $dia, $usuario);
        $ins->execute();

        echo "ok";
        echo "<script> window.location.href = 'merenda-form.php'; </script>";
    } else {
        echo "Erro ao inserir em Merenda.";
    }
}
?>