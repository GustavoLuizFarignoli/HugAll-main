<?php
    include('connection.php');

    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    $sql = "SELECT cpf, senha FROM usuario WHERE cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $cs = strcmp($row['senha'], $senha);
            if ($cs != 0){
                session_start();
                $_SESSION["user"] = 0;
                echo "Login fail!!!";
                header("Location: http://localhost/HugAll-main/login.php");
            }
            else{
                session_start();
                $_SESSION["user"] = [$cpf,$senha];
                echo "Login Succeed!!!";
                header("Location: http://localhost/HugAll-main/index.php");
            }
        }
    }
    else {
        //session_start();
        //$_SESSION["name"] = 0;
        echo "Login fail!!!";
        header("Location: http://localhost/HugAll-main/login.php");
    }

    
?>