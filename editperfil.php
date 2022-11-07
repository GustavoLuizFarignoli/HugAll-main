<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/editperfil.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Editando o perfil</title>
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
                <a href="#"></a>
                <a href="#"></a>
                <a href="perfil.php">Seu Perfil</a>
            </div>
        </div>
        <div class="body">
            <form id="form" action="crud/editperfil_php.php" method="POST" onsubmit="return certeza()">
                <img src="Imagens/user.png" class="image">
                <div class="input">
                    <label for="">Nome</label>
                    <input type="text" class="box-input" name="name" id="name" placeholder="Digite aqui para alterar seu nome">
                </div>
                <div class="input">
                <label for="">Data de Nascimento</label>
                    <input type="date" class="box-input" name="DataNascimento" id="DataNascimento" placeholder="dd/MM/AAAA"> 
                </div>
                <div class="input">
                    <label for="">Alterar Sobre Mim</label>
                    <input type="text" class="box-input" name="sobre" id="sobre" placeholder="Digite algo para alterar seu sobre mim">     
                </div>
                <label for="" style="color:#ffff; font-weight: bold;">Alterar Interesse</label>
                <div class="inputradio">
                    <input type="radio" name="usertype" value="0" checked> Não Alterar
                    <input type="radio" name="usertype" value="1"> Voluntário
                    <input type="radio" name="usertype" value="2"> Doador
                    <input type="radio" name="usertype" value="3"> Observador 
                </div>
                <div class="input">
                    <button type="submit" class="button" id="button-send" style="width: 30% !Important;">Confirmar Alterações</button>
                </div>
            </form>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "index.php";
        }
        function certeza(){
            if (confirm("Você tem certeza que deseja alterar essas confirmações ?")){
                return true;
            } else {
                return false;
            }
        }
    </script>
</body>
</html>