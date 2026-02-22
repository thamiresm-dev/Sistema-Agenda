<?php
    include_once('../conexao.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Criptografa a senha

    $sql = "INSERT INTO usuarios(username, email, password) VALUES ('$username', '$email', '$password')";

    $result = mysqli_query($conexao, $sql);

    header('Location: ../../frontend/pages/login.html')
?>