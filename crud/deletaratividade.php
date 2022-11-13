<?php
    include('connection.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM atividades WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/HugAll-main/perfil.php");
    }
    else {
        header("Location: http://localhost/HugAll-main/index.php");
    }

?>