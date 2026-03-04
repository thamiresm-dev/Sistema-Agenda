<?php
    session_start();
    include_once('../conexao.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlSelect = $conexao->prepare("SELECT * FROM usuarios WHERE email = ?");
    $sqlSelect->bind_param("s", $email);
    $sqlSelect->execute();
    $result = $sqlSelect->get_result();

    if($result->num_rows == 1){
        $dadosUsuario = $result->fetch_assoc(); // Pega a linha do resultado da consulta sql e transforma em um array associativo de dados

        if(password_verify($password, $dadosUsuario['password'])){
            $_SESSION['id'] = $dadosUsuario['id'];
            $_SESSION['email'] = $dadosUsuario['email'];
            header('Location: ../../frontend/pages/usuario-logado/menu-principal.php');
        }
        else{
            echo "Senha incorreta!";
        }
    }
    else{
        echo "Usuário não encontrado!";
    }

    $sqlSelect->close();
?>