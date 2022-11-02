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
            <a href="login.php">Fazer login</a>
            <a href="Index.php">Sobre Nós</a>
            <a href="Equipe.php">A Equipe</a>
            <a href="Carrosel.php">ONGs em Destaque</a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="perfil.php">Seu Perfil</a>
        </div>
        <div class="body" style="background-color: rgb(255, 0, 0, 0.5);">
            <div class="flex" style="background-color: rgb(0, 0, 255, 0.7);">
                <img src="Imagens/user.png" class="image">
                <h1>Gustavo Luiz Farignoli</h1>
            </div>
            <div style="background-color: green; margin: 20px; font-size:large">
                <h2>Sobre Mim</h2>
                <h3>Não nasci para competir com os outros, mas para superar a mim mesmo. No final do dia, sempre dou risada. E não perco essa minha estranha mania de ter fé na vida!
                Eu tentei ser normal, mas não gostei.</h3>
            </div>
            <div class="flex" style="background-color: yellow;">
                <div>
                    <h2>Data de Nascimento</h2>
                    <p>24/06/2004</p>
                </div>
                <div>
                    <h2>Tipo de usuário</h2>
                    <p>Voluntário</p>
                </div>
            </div>
            <div style="background-color: white; margin: 20px; font-size:large; border-radius: 8px;">
                <h2>Atividades Recentes</h2>
                <h3 style="margin-bottom: 15px;">Doou 1 kg de alimentos para a ONG Tombalatas</h3>
                <h3 style="margin-bottom: 15px;">Doou 1000 reais de alimentos para a ONG Teto</h3>
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