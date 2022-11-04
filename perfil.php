<?php
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
    
    include('crud/connection.php');

    $cpf = $_SESSION["user"][0];

    $sql = "SELECT cpf, nome, nascimento, fk_tipo, sobre FROM usuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $nome = $row['nome'];
            $arraydata = explode("-",$row['nascimento']);
            $data = $arraydata[2] . '/' .$arraydata[1] . '/' .$arraydata[0];
            $tipo = $row['fk_tipo'];
            if ($tipo == 1){
                $tipo = 'Voluntário';
            } else if ($tipo == 2){
                $tipo = 'Doador';
            } else {
                $tipo = 'Observador';
            }
            $sobre = $row['sobre'];
            if (is_null($sobre) == 1){
                $sobre = 'Adicione um pouco sobre você aqui';
            }
        }
    }
    else {
        header("Location: login.php");
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
    <link rel="stylesheet" type="text/css" href="CSS/perfil.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Seu perfil</title>
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
            <div class="perfil">
                <div class="flex name">
                    <img src="Imagens/user.png" class="image">
                    <h1 class="sublinhado"><?php echo $nome;?></h1>
                </div>
                <div class="flex information">
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Data de Nascimento</h2>
                        <h3><?php echo $data;?></h3>
                    </div>
                    <div>
                        <h2 class="sublinhado" style="margin-bottom: 5px;">Tipo de usuário</h2>
                        <h3><?php echo $tipo;?></h3>
                    </div>
                </div>
                <div class="about">
                    <h2>Sobre Mim</h2>
                    <hr>
                    <h3><?php echo $sobre;?></h3>
                </div>
                <div class="activity">
                    <h2>Atividades Recentes</h2>
                    <hr>
                    <?php
                        $sql = "SELECT descricao FROM atividades WHERE fk_cpf = '$cpf'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()){
                                echo '<h3 style="margin-bottom: 15px;">' .  $row['descricao'] . "<br>";
                            }
                        }
                        else {
                            echo 'nenhuma atividade recente';
                        }
                    ?>
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