<?php
// Inicia a sessão
session_start();

// Inclui o arquivo com as credenciais
include 'credentials.php';

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Se a autenticação for bem-sucedida, redireciona para o diretório /heise
    if ($username == $credentials['username'] && md5($password) == $credentials['password']) {
        $_SESSION['loggedin'] = true;
        header('Location: /heise');
        exit;
    } else {
        echo '<script>alert("Nome de usuário ou senha incorretos!"); window.location.href="index.html";</script>';
    }
}
?>
