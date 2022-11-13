<?php
    include('connection.php');

    session_start();
    if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
        $cpf = $_SESSION["user"][0];

        $tipo = $_POST["type"];
        $quant = $_POST["quantidade"];
        $ong = $_POST["ong"];

        if ($tipo == 1){
            $objeto = $_POST["objeto"];

            $money = ["reais","real","dólar","dólares","dolar","dolares","euro","euros"];

            if (in_array(strtolower($objeto), $money)){
                $mensagem = "Doou " . $quant . " " . strtolower($objeto) . " para a ONG " . $ong;
            } else{
                $mensagem = "Doou " . $quant . " de " . strtolower($objeto) . " para a ONG " . $ong;
            }
            $sql = "INSERT INTO atividades (descricao, fk_cpf) VALUES ('$mensagem', '$cpf')";

            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                header("Location: http://localhost/HugAll-main/perfil.php");
            } else {
                header("Location: http://localhost/HugAll-main/atividades.php");
            }

        } else if ($tipo == 2) {
            $mensagem = "Voluntariou por " . $quant . " na a ONG " . $ong;

            $sql = "INSERT INTO atividades (descricao, fk_cpf) VALUES ('$mensagem', '$cpf')";

            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                header("Location: http://localhost/HugAll-main/perfil.php");
            } else {
                header("Location: http://localhost/HugAll-main/atividades.php");
            }
        }
    } else {
        header("Location: http://localhost/HugAll-main/login.php");
    }
?>