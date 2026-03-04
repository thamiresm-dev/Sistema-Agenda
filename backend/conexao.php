<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'sistema-agenda';

    // Configura tratamento de erros: faz com que todo erro seja informado e tratado como uma exceção
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    try{
        $conexao = new mysqli($host, $username, $password, $database);
    }
    catch(mysqli_sql_exception $e){
        die("Erro de conexão: ".$e->getMessage());
    }
?>