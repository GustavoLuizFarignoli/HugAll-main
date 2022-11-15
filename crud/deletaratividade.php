<?php
    include('connection.php');

    $id = $_GET['id'];

    session_start();
    if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){

        $sql = "DELETE FROM atividades WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header("Location: http://localhost/HugAll-main/perfil.php");
        }
        else {
            header("Location: http://localhost/HugAll-main/index.php");
        }
    } else {
        header("Location: http://localhost/HugAll-main/index.php");
    }

?>