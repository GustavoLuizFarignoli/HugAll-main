<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/atividades.css">
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
            <form id="form" action="crud/atividades_php.php" method="POST" onsubmit="return validacao()">
                <h2 style="color: #fff;" class="sublinhado">Cadastrando Atividade Recente</h2>
                <div class="inputradio">
                    <input type="radio" name="type" value="1" onclick="doacao()"> Doação
                    <input type="radio" name="type" value="2" onclick="voluntariado()"> Voluntariado
                </div>
                <div id="i1" class="input">
                    <label for="">Quantidade</label>
                    <input type="text" class="box-input" name="quantidade" id="quantidade" placeholder="Digite a quantidade é a únidade caso tenha ex: 1 kg" disabled>
                </div>
                <div id="i3" class="input">
                    <label for="">Objeto</label>
                    <input type="text" class="box-input" name="objeto" id="objeto" placeholder="Digite o que você doou" disabled>
                </div>
                <div id="i4" class="input">
                    <label for="">ONG</label>
                    <input type="text" class="box-input" name="ong" id="ong" placeholder="Digite para quem você doou" disabled>
                </div>
                <div class="input">
                    <button type="submit" class="button" id="button-send">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function doacao(){
            document.getElementById('quantidade').disabled = false;
            document.getElementById('objeto').disabled = false;
            document.getElementById('ong').disabled = false;
            // falta alterar os texto para ficar conivente com a operação
        }

        function voluntariado(){
            document.getElementById('quantidade').disabled = false;
            document.getElementById('objeto').disabled = true;
            document.getElementById('ong').disabled = false;
            // falta alterar os texto para ficar conivente com a operação
        }

        function validacao(){
            let type = form.type;
            let quant = document.getElementById('quantidade').value;
            let objeto = document.getElementById('objeto').value;
            let ong = document.getElementById('ong').value;

            if (type.value == '') {
                alert('Por favor, escolha uma dos tipos de atividade para resgistrar!');
                return false;
            }

            if (quant.length == 0){
                if (type.value == 1){
                    alert ('Por favor especifique a quantidade que foi doada');
                } else if (type.value == 2) {
                    alert ('Por favor, especifique o tempo pelo qual voluntariou');
                }
                return false;
            }


            if (type.value == 1 & objeto.length == 0) {
                alert('Por favor, preencha o que foi doado');
                return false;
            }

            if (ong.length == 0){
                alert('Por favor, especifique a ong');
                return false;
            }

            return true;
        }
    </script>
</body>
</html>