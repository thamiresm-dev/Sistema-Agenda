<?php
    include_once('../conexao.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha

    $sqlVerificaEmail = "SELECT * FROM usuarios WHERE email = '$email'";
    $quantEmail = mysqli_query($conexao, $sqlVerificaEmail);

    if(mysqli_num_rows($quantEmail) == 1){
        echo "Não foi possível cadastrar, endereço de email já existente.";
    }
    else{
        $sql = "INSERT INTO usuarios(username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conexao, $sql);

        header('Location: ../../frontend/pages/login.html');
        exit();
    }
?>