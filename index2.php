<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    <?php
        session_start();  // Inicia a sessão (se ainda não tiver sido iniciada)

        // Verifica se o usuário está autenticado
        if (!isset($_SESSION['user'])) {
            header("Location: index.php");  // Redireciona para a página de login se não estiver autenticado
            exit();  // Encerra o script após redirecionar
        }

        // Aqui você pode exibir o conteúdo da página do dashboard
        echo "Bem-vindo, " . $_SESSION['user'] . "!";
    ?>
</body>
</html>