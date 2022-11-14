<?php
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
    
    include('crud/connection.php');

    $id = $_GET["id"];

    $sql = "SELECT nome, fundacao, fk_idcausa, contato, sobre, imagem FROM ong WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $nome = $row['nome'];
            $ano = $row['fundacao'];
            $idcausa = $row['fk_idcausa'];
            $contato = $row['contato'];
            $sobre = $row['sobre'];
            if (is_null($sobre) == 1){
                $sobre = 'Sem informações sobre essa ong, nós ajude adicionar, nos contate em HugAll@outlook.com';
            }
            $imagem = $row['imagem'];

            $sql2 = "SELECT causa FROM causas WHERE id = $idcausa";
            $result2 = $conn->query($sql2);

            if ($result2->num_rows > 0){
                while ($row2 = $result2->fetch_assoc()){
                    $causa = $row2['causa'];
                }
            }
        }
    } else {
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
                <a href="buscar.php">Buscar ONG</a>
                <a href="perfil.php">Seu Perfil</a>
            </div>
        </div>
        <div class="body">
            <div class="perfil">
                <div class="flex name">
                    <img src=<?php echo "Imagens/ongs/" . $imagem ?> class="image">
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
                    <h2>Eventos Recentes</h2>
                    <hr>
                    <?php
                        $sql = "SELECT descricao FROM eventos WHERE fk_id_ong = $id";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()){
                                echo '<h3 style="margin-bottom: 15px;">' .  $row['descricao'] . "</h3>";
                            }
                        }
                        else {
                            echo '<h3 style="margin-bottom: 15px;">' . 'nenhuma atividade recente' . '</h3>';
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
        function rede(){
            var link = <?php echo(json_encode($contato)) ?>;
            window.open(link, '_blank').focus();
        }
    </script>
</body>
</html>