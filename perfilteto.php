<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/ong.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Teto</title>
</head>
<body>
    <div id="main">
        <div class="menu">
            <div class="fixed">
                <h2 id="Logo"><img id="logoimage" src="Imagens/hugALL-removebg-preview.png" onclick="home()"></h2>
                <a href="login.php">Logar-se</a>
                <a href="Index.php">Sobre Nós</a>
                <a href="Equipe.php">A Equipe</a>
                <a href="Carrosel.php">ONGs em Destaque</a>
                <a href="perfil.php">Seu Perfil</a>
            </div>
        </div>
        <div class="body">
            <div class="perfil">
                <div class="flex name">
                    <img src="Imagens/Teto.png" class="image">
                    <h1 class="sublinhado">Teto</h1>
                </div>
                <div class="flex information">
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Ano de Fundação</h2>
                        <h3>2007</h3>
                    </div>
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Causa</h2>
                        <h3>Moradia</h3>
                    </div>
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Saber Mais</h2>
                        <h3><a onclick="rede()" style="color:blue">Redes Sociais</a></h3>
                    </div>
                </div>
                <div class="about">
                    <h2>Sobre a ONG</h2>
                    <hr>
                    <h3>Trabalhamos pela construção de um país justo e sem pobreza. Em associação com a organização internacional TECHO, 
                        presente em 18 países da América Latina, estamos há 15 anos no Brasil.</h3>
                </div>
                <div class="activity">
                    <h2>Atividades Recentes</h2>
                    <hr>
                    <h3 style="margin-bottom: 15px;">Movimento #Favela em Pauta Já</h3>
                </div>
            </div>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "Index.php";
        }
        function rede(){
            window.open("https://linktr.ee/tetobrasil", '_blank').focus();
        }
    </script>
</body>
</html>