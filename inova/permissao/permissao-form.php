<?php
$dia = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

.inputo{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 171px; 
    margin-left: 3px;
    display: inline-flex;
}

.bota{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 70px; 
    margin-left: 39%;
}

.dia{
    font-size: large;
    font-weight: bold;
}

.diva{
    margin:0 auto;
    border-radius: 10px;
    padding:8.5px;
    height: 320px;
    width: 352px;
    background-color:rgb(189, 189, 189);
}

.inputa{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 334px; 
    height: 100px;
    vertical-align: top;
    display:block;
}

.inputo2{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 303px; 
    margin-left: 3px;
    display: inline-flex;
}
.inputo3{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 295px; 
    margin-left: 3px;
    display: inline-flex;
}
.inputo4{
    border-radius: 10px; 
    padding: 2px 5px 2px 5px; 
    width: 198px; 
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="diva">
        <form action="permissao.php" method="post">
            <div>Nome do responsável:<input type="text" class="inputo" name="nomeResp"></div>
            <div>RG:<input type="text" class="inputo2" name="RG"></div>
            <div>CPF:<input type="text" class="inputo3" name="CPF"></div>
            <div>Nome do Aluno(a):<input type="text" class="inputo4" name="nomeAluno"></div>
            <div>Data de Saida:<div class="dia" style="display:inline"><?php echo "$dia";?></div>
            <div>Horário:<input type="time" name="hora"></div>
            <div>Motivo(Não obrigatório):<textarea class="inputa" name="motivo"></textarea></div>
            <input type="hidden" name="Confirmado" value="Confirmado">
            <br>
            <input type="submit" class="bota" value="Enviar">  
        </form>
    </div>
    <footer class="footer">
        <p>2025 INOVATEC - Todos os direitos reservados à nós.</p>
    </footer>
</body>
</html>