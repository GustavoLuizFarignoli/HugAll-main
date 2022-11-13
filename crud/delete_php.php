<?php
    include('connection.php');

    session_start();
    if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){

        $cpf = $_SESSION["user"][0];

        $sql = "DELETE FROM usuario WHERE cpf = '$cpf'";

        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/HugAll-main/index.php");
        }
        else {
            header("Location: http://localhost/HugAll-main/perfil.php");
        }
    }else {
        header("Location: http://localhost/HugAll-main/index.php");
    }

?>