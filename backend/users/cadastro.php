<?php
    include_once('../conexao.php');

    // Verifica se os dados estão chegando
    if(!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])){
        die("Dados incompletos!");
    }

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $passwordInput = trim($_POST['password']);

    // Verifica se os dados estão vazios
    if(empty($username) || empty($email) || empty($passwordInput)){
        die("Defina todos os dados corretamente!");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Email inválido!");
    }

    if(strlen($passwordInput) < 8){
        die("Senha muito curta!");
    }

    $password = password_hash($passwordInput, PASSWORD_DEFAULT);

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