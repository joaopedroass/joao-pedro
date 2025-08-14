<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "inova";

$conn = new mysqli($host,$usuario,$senha,$banco);
$dia = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merenda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="merenda.css">
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #D9D9D9;
    }
    .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #2F2828;
        color: white;
        text-align: center;
        padding: 25px 0;
        font-size: 14px;
    }

    .navbar-custom {
        background-color: #CC3434;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100px;
        padding: 0 20px;
        position: relative;
    }

    .navbar-left .hamburger {
        background: none;
        border: none;
        font-size: 40px;
        color: white;
        cursor: pointer;
    }

    .navbar-center {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
    }
    .navbar-right .search-form {
        display: flex;
        align-items: center;
    }

    .nav-links {
        background-color: #7E7E7E;
        padding: 15px 0;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav-links a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 50px;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .nav-links a:hover {
        color: #3b3b3b;

    }

    .search-form input {
        padding: 2.2% 10px;
        border: none;
        border-radius: 3px 0 0 3px;
        outline: none;
        font-size: medium;
    }

    .search-form button {
        padding: 0.8vh 10px;
        background-color: white;
        color: #CC3434;
        border: none;
        border-radius: 0 3px 3px 0;
        cursor: pointer;
    }

    .logo {
        font-size: 40px;
        font-weight: bold;
        color: white;
    }

    </style>
</head>
<body>
    <nav class="navbar-custom">
        <div class="navbar-left">
            <button class="hamburger">
                ☰
            </button>
        </div>

        <div class="navbar-center">
            <span class="logo">INOVATEC</span>
        </div>

        <div class="navbar-right">
            <form class="search-form">
                <input type="text" placeholder="Pesquisar">
                <button type="submit">🔍</button>
            </form>
        </div>
    </nav>
    <div class="nav-links">
        <a href="../index/inicio.html">Início</a>
        <a href="../labs/labs-form.php">Laboratórios</a>
        <a href="../merenda/merenda-form.php">Merenda</a>
        <a href="../permissao/permissao-form.php">Permissão</a>
        <a href="../login/login.php">Sair</a>
    </div>
  <center>
    <br>
    <br>
    <br>
<div class="card" style="width: 18rem; margin-top:70px;">
  <div class="card-body">
    <h5 class="card-title">Segunda-Feira</h5>
    <p class="card-text">Arroz;<br>
        Feijão Preto;<br>
        Carne de porco;<br>
        Salada de alface e tomate.
    </p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Terça-Feira</h5>
    <p class="card-text">Arroz;<br>
        Filé-mignon ao Molho madeira;<br>
        Salada de aspargo;<br>
        Aligot.
    </p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Quarta-Feira</h5>
    <p class="card-text">Risoto de frango;<br>
        Salada de rúcula;<br>
        Legumes;<br>
        Biscoitos integrais.
    </p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Quinta-Feira</h5>
    <p class="card-text">Purê de batata;<br>
        Filé de peixe grelhado;<br>
        Abobrinha refogada;<br>
        Morangos frescos.
    </p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Sexta-Feira</h5>
    <p class="card-text">Arroz;<br>
        Filé de frango a parmegiana;<br>
        Feijão;<br>
        Batata assada.
    </p>
  </div>
</div>
<div style="display: flex; justify-content: center; align-items: flex-start; gap: 20px; margin-top: 30px;">
<form action="merenda.php" method="post">
    <div id="divAgora" class="dia"></div>
    <div class="dia"><?php echo "$dia";?></div>
    <input type="hidden" name="sim" value="Sim">
    <input class="aulas" type="submit" value="SIM">  
</form>
 

    <?php
    $stmt = "SELECT * FROM Confirmacao WHERE Confirmacao = '$confirmacao' AND dia = '$dia'";
    $result = mysqli_query($conn, $stmt);

    if (mysqli_num_rows($result) > 0) {
            echo '
        <div style="border: 1px solid #ccc; background-color: #f8f9fa; padding: 15px; width: 300px; border-radius: 5px;">
            <strong>Você já confirmou a merenda hoje.</strong><br>
            Obrigado por sua resposta!
        </div>';
    }
    ?>
</div>
</center>   
    <footer class="footer">
        <p>2025 INOVATEC - Todos os direitos reservados à nós.</p>
    </footer>
<script src="merenda.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>