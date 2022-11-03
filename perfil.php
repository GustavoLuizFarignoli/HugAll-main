<?php
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
    //echo "Bem vindo(a) ao Sistema, " . ucfirst($_SESSION["user"][0]);
  } else {
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/perfil.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Seu perfil</title>
</head>
<body>
    <div id="main">
        <div class="menu">
            <h2 id="Logo"><img id="logoimage" src="Imagens/hugALL-removebg-preview.png" onclick="home()"></h2>
            <a href="login.php">Logar-se</a>
            <a href="Index.php">Sobre Nós</a>
            <a href="Equipe.php">A Equipe</a>
            <a href="Carrosel.php">ONGs em Destaque</a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="perfil.php">Seu Perfil</a>
        </div>
        <div class="body">
            <div class="perfil">
                <div class="flex name">
                    <img src="Imagens/user.png" class="image">
                    <h1 class="sublinhado">Gustavo Luiz Farignoli</h1>
                </div>
                <div class="flex information">
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Data de Nascimento</h2>
                        <h3>24/06/2004</h3>
                    </div>
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Tipo de usuário</h2>
                        <h3>Voluntário</h3>
                    </div>
                </div>
                <div class="about">
                    <h2>Sobre Mim</h2>
                    <hr>
                    <h3>Não nasci para competir com os outros, mas para superar a mim mesmo. No final do dia, sempre dou risada. E não perco essa minha estranha mania de ter fé na vida!
                    Eu tentei ser normal, mas não gostei.</h3>
                </div>
                <div class="activity">
                    <h2>Atividades Recentes</h2>
                    <hr>
                    <h3 style="margin-bottom: 15px;">Doou 1 kg de alimentos para a ONG Tombalatas</h3>
                    <h3 style="margin-bottom: 15px;">Doou 1000 reais de alimentos para a ONG Teto</h3>
                    <h3 style="margin-bottom: 15px;">Doou 1000 reais de alimentos para a ONG Grupo Dignidade</h3>
                </div>
            </div>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "Index.php";
        }
    </script>
</body>
</html>