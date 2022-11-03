<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Equipe.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Conheça a Equipe</title>
</head>
<body>
    <div id="main">
        <div class="menu">
            <h2 id="Logo"><img id="image" src="Imagens/hugALL-removebg-preview.png" onclick="home()"></h2>
            <a href="login.php">Logar-se</a>
            <a href="Index.php">Sobre Nós</a>
            <a href="Equipe.php">A Equipe</a>
            <a href="Carrosel.php">ONGs em Destaque</a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="perfil.php">Seu Perfil</a>
        </div>
        <div class="body">
            <h1>Conheça nossa Equipe</h1>
            <div class="equipe-row">
                <div class="equipe-membro">
                    <img src="imagens/Gustavo.jpeg" class="equipe-imagem">
                    <div class="equipe-texto">
                    <h2>Gustavo Luiz Farignoli</h2>
                    <p>Programador Web Front e Back</p>
                    <a href="https://www.linkedin.com/in/gustavo-luiz-farignoli-164595235/">Me encontre no Linkedin</a>
                    </div>
                </div>
                <div class="equipe-membro">
                    <img src="imagens/Breno.jpeg" class="equipe-imagem">
                    <div class="equipe-texto">
                    <h2>Breno Rocha Sedrez</h2>
                    <p>Gerenciador de Banco de Dados</p>
                    <a href="https://www.linkedin.com/in/breno-sedrez-944588213/">Me encontre no Linkedin</a>
                    </div>
                </div>
            </div>
            <div class="equipe-row">
                <div class="equipe-membro">
                    <img src="imagens/Molec.jpeg" class="equipe-imagem">
                    <div class="equipe-texto">
                    <h2>Gabriel Molec</h2>
                    <p>Gerenciador de Banco de Dados</p>
                    <a href="https://github.com/Aquahz">Me encontre no Github</a>
                    </div>
                </div>
                    <div class="equipe-membro">
                    <img src="imagens/Vink.jpeg" class="equipe-imagem">
                    <div class="equipe-texto">
                    <h2>Gabriel Vink</h2>
                    <p>Programador Web</p>
                    <a href="">Me encontre no Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "index.php";
        }
    </script>
</body>
</html>