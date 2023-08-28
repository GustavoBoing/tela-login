<?php
// Informações de conexão com o banco de dados
$servername = "localhost";
$dbname = "teste_login";
$username = "root";
$password = "";

// Dados do formulário
$user = $_POST['user'];
$senha = $_POST['senha'];

try {
    // Criar conexão PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para verificar o usuário e a senha
    $query = "SELECT * FROM tbl_usuario WHERE user = :user AND senha = :senha";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    // Verificar se o usuário foi encontrado
    if ($stmt->rowCount() > 0) {
            session_start();  // Inicia a sessão (se ainda não tiver sido iniciada)
            $_SESSION['user'] = $user;  // Armazena o nome de usuário na sessão
            header("Location: index2.php");  // Redireciona para a página de dashboard
        exit();  // Encerra o script após redirecionar
    } else {
        echo "Usuário ou senha incorretos.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
/*Lembre-se de adaptar as informações do banco de dados e a tabela de usuários de acordo com o seu ambiente. Além disso, considere implementar medidas adicionais de segurança, como o uso de senhas criptografadas, proteção contra ataques de injeção SQL e sessões para manter os usuários autenticados.*/

?>





