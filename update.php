<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/update.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Alterar senha no HugAll</title>
</head>
<body>
    <div id="main">
        <div class="menu">
            <div class="fixed">
                <h2 id="Logo"><img id="image" src="Imagens/hugALL-removebg-preview.png" onclick="home()"></h2>
                <a href="login.php">Logar-se</a>
                <a href="Index.php">Sobre Nós</a>
                <a href="Equipe.php">A Equipe</a>
                <a href="Carrosel.php">ONGs em Destaque</a>
                <a href="perfil.php">Seu Perfil</a>
            </div>
        </div>
        <div class="body">
            <form id="form" action="crud/update_php.php" method="POST">
                <div class="input">
                    <label for="">CPF</label>
                    <input type="text" class="box-input" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX">
                </div>
                <div class="input">
                    <label for="">Senha Atual</label>
                    <input type="password" class="box-input" name="atual" id="atual" placeholder="Digite uma senha">     
                </div>
                <div class="input">
                    <label for="">Senha Nova</label>
                    <input type="password" class="box-input" name="nova" id="nova" placeholder="Digite uma senha">     
                </div>
                <div class="input">
                    <button type="submit" class="button" id="button-send" style="width: 20% !Important;">Alterar Senha</button>
                </div>
            </form>
            <br><a href="login.php"><label style="cursor: pointer;">Fazer Login</label></a>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "index.php";
        }
    </script>
</body>
</html>