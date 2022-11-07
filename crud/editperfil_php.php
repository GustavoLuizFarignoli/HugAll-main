<?php

    include('connection.php');

    $nome = $_POST["name"];
    #echo "O nome colocado foi" . $nome . " A " . "<br>";
    $data = $_POST["DataNascimento"];
    #echo "A data colocado foi" . $data . " B " . "<br>";
    $tipo = $_POST["usertype"];
    #echo "O tipo colocado foi" . $tipo . " C " . "<br>";
    $sobre = $_POST["sobre"];
    #echo "O sobre colocado foi" . $sobre . " D " . "<br>";

    session_start();
    if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
        $cpf = $_SESSION["user"][0];
    } else {
        header("Location: http://localhost/HugAll-main/login.php");;
    }

    if (strlen($nome) != 0){
        $sql = "UPDATE usuario SET nome = '$nome' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            echo "Update Success";
        }
        else {
            echo "Update fail!!!";
        }
    } 

    if (strlen($data) != 0){
        $sql = "UPDATE usuario SET nascimento = '$data' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            echo "Update Success";
        }
        else {
            echo "Update fail!!!";
        }
    } 

    if (is_null($tipo) != 0){
        $sql = "UPDATE usuario SET fk_tipo = '$tipo' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            echo "Update Success";
        }
        else {
            echo "Update fail!!!";
        }
    }

    if (strlen($sobre) != 0){
        $sql = "UPDATE usuario SET sobre = '$sobre' WHERE cpf = '$cpf'";
        if ($conn->query($sql) === TRUE) {
            echo "Update Success";
        }
        else {
            echo "Update fail!!!";
        }
    } 

    echo 'Finalizado o update';
?>