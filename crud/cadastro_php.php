<?php
    include('connection.php');

    $cpf = $_POST["cpf"];
    $name = $_POST["name"];
    $data = $_POST["DataNascimento"];
    $senha = $_POST["senha"];
    $tipo = $_POST["usertype"];

    $sql = "INSERT INTO usuario VALUES('$cpf','$name','$data','$senha','$tipo')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "Insert Succeed!!!";
        header("Location: http://localhost/HugAll-main/login.php");
    }
    else {
        echo ("alert('Insert fail!!!')");
        header("Location: http://localhost/HugAll-main/cadastro.php");
    }
?>
