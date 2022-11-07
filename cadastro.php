<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>Cadastra-se no HugAll</title>
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
                <a href="#"></a>
                <a href="#"></a>
                <a href="perfil.php">Seu Perfil</a>
            </div>
        </div>
        <div class="body">
            <form id="form" action="crud/cadastro_php.php" method="POST" onsubmit="return validacao()">
                <div class="input">
                    <label for="">CPF</label>
                    <input type="text" class="box-input" name="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX">
                </div>
                <div class="input">
                    <label for="">Nome</label>
                    <input type="text" class="box-input" name="name" id="name" placeholder="Digite seu nome">
                </div>
                <div class="input">
                    <label for="">Data de Nascimento</label>
                    <input type="date" class="box-input" name="DataNascimento" id="DataNascimento" placeholder="dd/MM/AAAA"> 
                </div>
                <div class="input">
                    <label for="">Senha</label>
                    <input type="password" class="box-input" name="senha" id="senha" placeholder="Digite uma senha">     
                </div>
                <label for="" style="color:#ffff; font-weight: bold;">Quero Ser</label>
                <div class="inputradio">
                    <input type="radio" name="usertype" value="1"> Voluntário
                    <input type="radio" name="usertype" value="2"> Doador
                    <input type="radio" name="usertype" value="3"> Observador 
                </div>
                <div class="input">
                    <button type="submit" class="button" id="button-send">Enviar</button>
                </div>
            </form>
            <br><a href="login.php"><label style="cursor: pointer;">Já tem um cadastro ? Faça login</label></a>
        </div>
    </div>
    <script lang="javascript">
        function home(){
            location.href = "index.php";
        }

        function validacao() {
            let re = "([0-9]{2}[\.][0-9]{3}[\.][0-9]{3}[\/]?[0-9]{4}[-][0-9]{2})|([0-9]{3}[\.][0-9]{3}[\.][0-9]{3}[-][0-9]{2})";
            let cpf = document.getElementById('cpf').value;
            let nome = document.getElementById('name').value;
            let senha = document.getElementById('senha').value;
            let usertype = form.usertype;

            var hoje = new Date();
            var dd = String(hoje.getDate()).padStart(2, '0');
            var mm = String(hoje.getMonth() + 1).padStart(2, '0');
            var yyyy = hoje.getFullYear();
            let aniversario = document.getElementById('DataNascimento').value;


            if (!cpf.match(re)) {
                alert('CPF Invalido!');
                return false;
            } else if (validarCPF(cpf) == false){
                alert('CPF Invalido!');
                return false;
            }
            
            if (nome.length == 0) {
                alert('Digite seu nome!');
                return false;
            }

            if (senha.length == 0) {
                alert('Digite uma senha!');
                return false;
            }
            
            if (usertype.value == '') {
                    alert('Por favor, escolha uma dos tipos de usuários!');
                    return false;
                }
            if (aniversario.length != 0) {
                const ano = aniversario.split("-");
                if (ano[0] >= 2005){
                    console.log("tem 18 não irmão 1");
                    return false
                } else if (ano[0] == 2004){
                    if (ano[1] == mm) {
                        if (ano[2] > dd){
                            console.log("tem 18 não irmão 2");
                            return false
                        } else {
                            console.log("tem 18 irmão"); 
                            return true
                        }
                    } else if (ano[1] > mm){
                        console.log("tem 18 não irmão 3");
                        return false
                    }
                    return true
                } else {
                    console.log("tem 18 irmão"); 
                    return true
                }  
            } else {
                    alert('Digite o seu aniversario!');
                    return false
                }
            return true
        }

        function validarCPF(cpf) {	
            cpf = cpf.replace(/[^\d]+/g,'');	
            if(cpf == '') return false;	
            // Elimina CPFs invalidos conhecidos	
            if (cpf.length != 11 || 
                cpf == "00000000000" || 
                cpf == "11111111111" || 
                cpf == "22222222222" || 
                cpf == "33333333333" || 
                cpf == "44444444444" || 
                cpf == "55555555555" || 
                cpf == "66666666666" || 
                cpf == "77777777777" || 
                cpf == "88888888888" || 
                cpf == "99999999999")
                    return false;		
            // Valida 1o digito	
            add = 0;	
            for (i=0; i < 9; i ++)		
                add += parseInt(cpf.charAt(i)) * (10 - i);	
                rev = 11 - (add % 11);	
                if (rev == 10 || rev == 11)		
                    rev = 0;	
                if (rev != parseInt(cpf.charAt(9)))		
                    return false;		
            // Valida 2o digito	
            add = 0;	
            for (i = 0; i < 10; i ++)		
                add += parseInt(cpf.charAt(i)) * (11 - i);	
            rev = 11 - (add % 11);	
            if (rev == 10 || rev == 11)	
                rev = 0;	
            if (rev != parseInt(cpf.charAt(10)))
                return false;		
            return true;   
        }
    </script>
</body>
</html>