<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <center>
    <img class="inova" src="inova.png">
</center>
        
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form id="login" method="post" action="banco.php">
                        <label style="display: inline-flex; margin-left: 10px;">Entrar como: 
                            <select class="select">
                                <option value="">Select</option>
                                <option value="M">Aluno</option>
                                <option value="N">Professor</option>
                                <option value="N">Responsável</option>
                                <option value="N">Coordenação</option>
                            </select>
                        </label>
                        
                        
                        <label class="cod">Cód. da Escola:
                            <input class="inp" type="text" name="CodigodaEscola" required>
                        </label>      
                            <br>
                            <br>

                        <label style="margin-left:10px;">RM:
                            <input class="inp2" type="number" name="RM" required>
                        </label>

                        <label class="cod2">Senha:
                            <input class="inp3" type="password" name="Senha" required>
                        </label>
                        <br>

                        <div class="botao-centro">
                            <input class="bot" type="submit" value="Entrar">
                        </div>      
                       
                    </form>
                </div>
            </div>
        </div>

  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>