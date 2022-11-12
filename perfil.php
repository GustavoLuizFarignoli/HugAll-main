<?php
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
    
    include('crud/connection.php');

    $cpf = $_SESSION["user"][0];

    $sql = "SELECT cpf, nome, nascimento, fk_tipo, sobre, imagem FROM usuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $nome = $row['nome'];
            $arraydata = explode("-",$row['nascimento']);
            $data = $arraydata[2] . '/' .$arraydata[1] . '/' .$arraydata[0];
            $tipo = $row['fk_tipo'];
            $imagem = $row['imagem'];
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
                <a href="perfil.php">Seu Perfil</a>
                <?php
                    if ($tipo != 'Observador'){
                        echo '<a href="atividades.php">' . 'Cadastrar atividades' . '</a>';
                    }
                ?>
            </div>
        </div>
        <div class="body">
            <div class="perfil">
                <div class="flex name">
                    <img src=<?php echo "Imagens/perfis/" . $imagem ?> class="image">
                    <div style="margin-top: auto; margin-bottom:auto;">
                        <h1 class="sublinhado"><?php echo $nome;?></h1>
                        <div class="flex">
                            <h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 1024 1024" class="bin" onclick="deletar()">
                                    <path d="M864 256H736v-80c0-35.3-28.7-64-64-64H352c-35.3 0-64 28.7-64 64v80H160c-17.7 0-32 14.3-32 32v32c0 4.4 3.6 8 8 8h60.4l24.7 523c1.6 34.1 29.8 61 63.9 61h454c34.2 0 62.3-26.8 63.9-61l24.7-523H888c4.4 0 8-3.6 8-8v-32c0-17.7-14.3-32-32-32zm-200 0H360v-72h304v72z"/>
                                </svg>
                            </h3>
                            <h3>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 36 36" class="edit" onclick="edit()">
                                    <path d="m33 6.4l-3.7-3.7a1.71 1.71 0 0 0-2.36 0L23.65 6H6a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h22a2 2 0 0 0 2-2V11.76l3-3a1.67 1.67 0 0 0 0-2.36ZM18.83 20.13l-4.19.93l1-4.15l9.55-9.57l3.23 3.23ZM29.5 9.43L26.27 6.2l1.85-1.85l3.23 3.23Z" class="clr-i-solid clr-i-solid-path-1"/>
                                </svg>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="flex information">
                    <div>
                        <h2 class="sublinhado">Data de Nascimento</h2>
                        <h3><?php echo $data;?></h3>
                    </div>
                    <div>
                        <h2 class="sublinhado">Tipo de usuário</h2>
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

        function deletar(){
            if (confirm("Você tem certeza que deseja apagar sua conta ?")){
                if(confirm("Essa ação é irreversível, depois de apagar sua conta não será possível recupera-lá, deseja mesmo apagar sua conta ?")){
                    location.href = "crud/delete_php.php";
                }
            }
        }

        function edit(){
            location.href = "editperfil.php";
        }
    </script>
</body>
</html>