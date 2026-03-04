<?php
    include_once('../conexao.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sqlVerificaEmail = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
    $sqlVerificaEmail->bind_param("s", $email);
    $sqlVerificaEmail->execute();
    $sqlVerificaEmail->store_result(); // Permite usar num_rows

    if($sqlVerificaEmail->num_rows > 0){
        $sqlVerificaEmail->close();
        echo "Não foi possível cadastrar, email já existente.";
    }
    else{
        $sqlVerificaEmail->close();
        $sqlInsert = $conexao->prepare("INSERT INTO usuarios(username, email, password) VALUES (?, ?, ?)");
        $sqlInsert->bind_param("sss", $username, $email, $password);
        $sqlInsert->execute();
        $sqlInsert->close();

        header('Location: ../../frontend/pages/login.html');
        exit();
    }
?>