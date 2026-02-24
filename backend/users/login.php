<?php
    session_start();
    include_once('../conexao.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($result) == 1){
        $dadosUsuario = mysqli_fetch_assoc($result); // Pega a linha do resultado da consulta sql e transforma em um array associativo de dados

        if(password_verify($password, $dadosUsuario['password'])){
            $_SESSION['id'] = $dadosUsuario['id'];
            $_SESSION['email'] = $dadosUsuario['email'];
            header('Location: ../../frontend/pages/menu-principal.php');
        }
        else{
            echo "Senha incorreta!";
        }
    }
    else{
        echo "Usuário não encontrado!";
    }
?>