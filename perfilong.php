<?php
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
    
    include('crud/connection.php');

    $id = $_GET["id"];

    $sql = "SELECT nome, fundacao, causa, contato, sobre FROM ong WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $nome = $row['nome'];
            $ano = $row['fundacao'];
            $causa = $row['causa'];
            $contato = $row['contato'];
            $sobre = $row['sobre'];
            if (is_null($sobre) == 1){
                $sobre = 'Sem informações sobre essa ong, nós ajude adicionar, nos contate em HugAll@outlook.com';
            }
        }
    }
    else {
        header("Location: index.php");
    }
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
    <link rel="stylesheet" type="text/css" href="CSS/ong.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title><?php echo "Perfil" . " " . $nome;?></title>
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
                    <img src="Imagens/TombaLatas.jpg" class="image">
                    <h1 class="sublinhado"><?php echo $nome;?></h1>
                </div>
                <div class="flex information">
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Ano de Fundação</h2>
                        <h3><?php echo $ano;?></h3>
                    </div>
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Causa</h2>
                        <h3><?php echo $causa;?></h3>
                    </div>
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Saber Mais</h2>
                        <h3><a onclick="rede()" style="color:blue">Redes Sociais</a></h3>
                    </div>
                </div>
                <div class="about">
                    <h2>Sobre a ONG</h2>
                    <hr>
                    <h3><?php echo $sobre;?></h3>
                </div>
                <div class="activity">
                    <h2>Atividades Recentes</h2>
                    <hr>
                    <h3 style="margin-bottom: 15px;">Bazar de Arrecadação na rua Almirante Gonçalves 2428</h3>
                </div>
            </div>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "Index.php";
        }
        function rede(){
            var link = <?php echo(json_encode($contato)) ?>;
            window.open(link, '_blank').focus();
        }
    </script>
</body>
</html>