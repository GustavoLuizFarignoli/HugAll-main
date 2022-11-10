<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/editperfil.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Cadastrando atividades</title>
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
                <a href="atividades.php">Cadastrar atividades</a>
            </div>
        </div>
        <div class="body">
            <form id="form" action="" method="POST" onsubmit="">
                <div class="inputradio">
                    <input type="radio" name="usertype" value="1" onclick="doacao()"> Doação
                    <input type="radio" name="usertype" value="2" onclick=""> Voluntariado
                </div>
                <div id="i1" class="input">
                    <label for="">Quantidade</label>
                    <input type="text" class="box-input" name="name" id="name" placeholder="Digite a quantidade é a únidade caso tenha ex: 1 kg">
                </div>
                <div id="i1" class="input">
                    <label for=""></label>
                    <input type="text" class="box-input" name="name" id="name" placeholder="Digite a quantidade é a únidade caso tenha ex: 1 kg">
                </div>
            </form>
        </div>
    </div>
    <script>
        function doacao(){
            <?php
                echo 'Teste';
            ?>
        }
    </script>
</body>
</html>