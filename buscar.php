<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/buscar.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Realizar Busca</title>
</head>
<body>
    <div id="main">
        <div class="menu">
            <div class="fixed">
                <h2 id="Logo"><img id="image" src="Imagens/hugALL-removebg-preview.png" onclick="home()"></h2>
                <a href="login.php">Logar-se</a>
                <a href="Index.php">Sobre Nós</a>
                <a href="Equipe.php">A Equipe</a>
                <a href="Carrosel.php">ONGs em Destaque</a>
                <a href="buscar.php">Buscar ONG</a>
                <a href="perfil.php">Seu Perfil</a>
            </div>
        </div>
        <div class="body">
            <form id="form" action="buscar.php" method="POST"> 
                <div class="search">
                    <input type="text" class="box-input" name="busca" id="busca" placeholder="Digite o nome ou a causa da ong que procura">
                    <button type="submit" name="submit" class="button">Buscar</button>
                </div>
                <div style="padding-top: 100px;">
                    <?php
                        include('crud/connection.php');

                        if(isset($_POST['submit'])){

                            $busca = $_POST['busca'];

                            $sql = "SELECT id, nome, fk_idcausa FROM ong WHERE nome LIKE '%$busca%'";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $i = 1;
                                while ($row = $result->fetch_assoc()){

                                    $idcausa = $row['fk_idcausa'];

                                    $sql2 = "SELECT causa FROM causas WHERE id = $idcausa";
                                    $result2 = $conn->query($sql2);

                                    if ($result2->num_rows > 0){
                                        while ($row2 = $result2->fetch_assoc()){
                                            $causa = $row2['causa'];

                                            echo '<h2>' . $i . ": " . '<a href="perfilong.php?id=' . $row['id'] . '">' . $row['nome'] . " - " . $row2['causa'] ."</a>" . "</h2>" . "<br>";
                                            $i = $i + 1;
                                        }
                                    } else {
                                        echo "<h2>" . "Sem resultados no banco de dados!!!" . "</h2>"; 
                                    }   
                                }
                            }
                            else {
                                $sql = "SELECT id, causa FROM causas WHERE causa LIKE '%$busca%'";
                                $result = $conn->query($sql);
                                
                                if ($result->num_rows > 0){
                                    $i = 1;
                                    while ($row = $result->fetch_assoc()){

                                        $idcausa = $row['id'];

                                        $sql2 = "SELECT id, nome, fk_idcausa FROM ong WHERE fk_idcausa = $idcausa";
                                        $result2 = $conn->query($sql2);

                                        if ($result2->num_rows > 0){
                                            while ($row2 = $result2->fetch_assoc()){
                                                echo '<h2>' . $i . ": " . '<a href="perfilong.php?id=' . $row2['id'] . '">' . $row2['nome'] . " - " . $row['causa'] ."</a>" . "</h2>" . "<br>";
                                                $i = $i + 1;
                                            }
                                        } else {
                                            echo "<h2>" . "Sem resultados no banco de dados!!!" . "</h2>"; 
                                        }   
                                    }
                                } else {
                                    echo "<h2>" . "Sem resultados no banco de dados!!!" . "</h2>";
                                }
                            }
                        }
                    ?>
                </div>
            </form>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "index.php";
        }
    </script>
</body>
</html>