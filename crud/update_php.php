<?php
    include('connection.php');

    $cpf = $_POST["cpf"];
    $atual = $_POST["atual"];
    $nova = $_POST["nova"];

    $sql = "SELECT cpf, senha FROM usuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $cc = strcmp($row['cpf'], $cpf);
            $cs = strcmp($row['senha'], $atual);
            if ($cc != 0 or $cs != 0){
                echo "Update fail!!!";
                header("Location: http://localhost/HugAll-main/login.php");
            }
            else{
                echo "Update Succeed!!!";
                $sql2 = "UPDATE usuario SET senha = '$nova' WHERE cpf = '$cpf'";
                if ($conn->query($sql2) === TRUE) {
                    header("Location: http://localhost/HugAll-main/login.php");
                    session_start();
                    $_SESSION["user"] = 0;
                }
                else {
                    echo "Update fail!!!";
                }
            }
        }
    }
    else {
        echo "Update fail!!!";
        header("Location: http://localhost/HugAll-main/login.php");
    }
?>