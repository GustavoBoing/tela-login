<?php 
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $db_name = "teste_login";

    try {
        $conn = new PDO("mysql:host=$servidor;dbname=$db_name", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão bem sucedida";
    } catch(PDOException $e) {  
        echo "A conexão falhou: " . $e->getMessage();
    }
?>