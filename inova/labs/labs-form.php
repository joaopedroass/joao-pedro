<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "inova";

$conn = new mysqli($host,$usuario,$senha,$banco);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="labs.less">
    <title>Laboratórios</title>
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

.select{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 170px; 
    margin-left: 3px;
    display: inline-flex;
}

.lab{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 70px; 
    margin-left: 3px;
    display: inline-flex;
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
    
<form action="labs.php" method="post">
<table>
    <div class="calendar-wrapper">
        <div id="divCal"></div>
    </div>
</table>
</form>
        <center>
            <select name="turno" id="turno" class="select" onchange="atualizarHorarios()">
                <option value="">Selecione o turno</option>
                <option value="M">Manhã</option>
                <option value="N">Noite</option>
            </select>

            <select name="aula" id="aula" class="select">
                <option value="">Selecione o horário</option>
            </select>

            <select name="labs" id="" class="lab">

            <?php 
            $stmt = "select idlab, nome from Laboratorios;";

            $result = mysqli_query($conn, $stmt);

            if (mysqli_num_rows($result) > 0) {
                while ($dados = mysqli_fetch_object($result)) { ?>
                    <option value=" <?php echo $dados->idlab ?> "> <?php echo " $dados->nome" ?></option>
                <?php }
            }
            ?>
            </select>
            
            <input class="lab" type="submit" value="Enviar">   
        </center>
<script>
function atualizarHorarios() {
    const turno = document.getElementById("turno").value;
    const aulaSelect = document.getElementById("aula");

    // Limpa as opções anteriores
    aulaSelect.innerHTML = '';

    // Opções de horários por turno
    const horarios = {
        M: [
            { value: "1", label: "7:30-8:20" },
            { value: "2", label: "8:20-9:10" },
            { value: "3", label: "9:10-10:00" },
            { value: "4", label: "10:20-11:10" },
            { value: "5", label: "11:10-12:00" },
            { value: "6", label: "13:00-13:50" },
            { value: "7", label: "13:50-14:40" },
            { value: "8", label: "14:40-15:30" },
        ],
        N: [
            { value: "1", label: "18:30-19:15" },
            { value: "2", label: "19:15-20:00" },
            { value: "3", label: "20:00-20:45" },
            { value: "4", label: "21:00-21:45" },
            { value: "5", label: "21:45-22:30" },
        ]
    };

    // Adiciona uma opção padrão
    const defaultOption = document.createElement("option");
    defaultOption.value = "";
    defaultOption.text = "Selecione o horário";
    aulaSelect.appendChild(defaultOption);

    // Preenche os horários conforme o turno
    if (horarios[turno]) {
        horarios[turno].forEach(horario => {
            const option = document.createElement("option");
            option.value = horario.value;
            option.text = horario.label;
            aulaSelect.appendChild(option);
        });
    }
  }
</script>

    <footer class="footer">
        <p>2025 INOVATEC - Todos os direitos reservados à nós.</p>
    </footer>
<script src="labs.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>