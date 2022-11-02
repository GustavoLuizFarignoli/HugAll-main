<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/Index.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Quem Somos?</title>
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
                <details>
                    <summary><h1>Quem Somos Nós?</h1></summary>
                    <p>O Hugall é um projeto desenvolvido por um grupo de estudantes da PUCPR e tem como objetivo conectar Voluntários e Doadores com as ONGs de Curitiba</p>
                    <hr>
                </details>
                <details>
                    <summary><h1>Como Obtemos as informações ?</h1></summary>
                    <p>O HugAll possui um base de dados com um resumo das informações que são possiveis de se encontrar sobre cada ONG e com as informações que nossos usuários
                        podem nos dar sobre elas e apresentamos elas de maneira simplificada para aqueles que não conheçem possam saber um pouquinho sobre essas instituições que
                        fazem o bem para tantas pessoas, mas que não possuem os recursos para ajudar todas as aqueles que precisam
                    </p>
                    <hr>
                </details>
                <details>
                    <summary><h1>Como participar e ajudar as ONGs ?</h1></summary>
                    <p>O HugAll Serve apenas como uma vitrine, ao se cadastrar você pode encontrar as informações necessárias para se entrar em contanto com as ONGs assim podendo se
                        informar como cada instituição deseja receber ajuda, além disso o site possibilita que você entre em contato com outras pessoas engajadas na causa para conversar
                        para conhecer outras maneiras de como ajudar mais pessoas
                    </p>
                    <hr>
                </details>
                <details>
                    <summary><h1>Por que utilizar o HugAll ?</h1></summary>
                    <p>O Nosso site possui um área de perfil em que você como usuário pode registrar as ajudas que você prestou a todas as ONGs que descobriu graças ao nosso site,
                        dessa meneira você possui portifolio certificado de tudo que você já fez para ajudar a melhorar a cidade
                    </p>
                    <hr>
                </details>
                <details>
                    <summary><h1>Como entrar Contato ?</h1></summary>
                    <p>Entre em contanto com nós atráves de nosso Email: <a href="malito: HugAll@outlook.com">HugAll@outlook.com</a></p>
                    <hr>
                </details>
                <img id="image" src="Imagens/hugALL-removebg-preview.png">  
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "index.php";
        }
    </script>
</body>
</html>