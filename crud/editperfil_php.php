<?php

    include('connection.php');

    $nome = $_POST["name"];
    $data = $_POST["DataNascimento"];
    $tipo = $_POST["usertype"];
    $sobre = $_POST["sobre"];

    session_start();
    if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
        $cpf = $_SESSION["user"][0];
    } else {
        header("Location: http://localhost/HugAll-main/login.php");
    }

    if (strlen($nome) != 0){
        $sql = "UPDATE usuario SET nome = '$nome' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/HugAll-main/perfil.php");
        }
        else {
            header("Location: http://localhost/HugAll-main/login.php");
        }
    } 

    if (strlen($data) != 0){
        $sql = "UPDATE usuario SET nascimento = '$data' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/HugAll-main/perfil.php");
        }
        else {
            header("Location: http://localhost/HugAll-main/login.php");
        }
    } 

    if (strlen($sobre) != 0){
        $sql = "UPDATE usuario SET sobre = '$sobre' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/HugAll-main/perfil.php");
        }
        else {
            header("Location: http://localhost/HugAll-main/login.php");
        }
    } 

    if (($tipo) != 0){
        $sql = "UPDATE usuario SET fk_tipo = '$tipo' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/HugAll-main/perfil.php");
        }
        else {
           header("Location: http://localhost/HugAll-main/login.php");
        }
    }
?>