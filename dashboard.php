<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Se o usuário não estiver logado, redireciona para o login
    exit();
}

echo "Bem-vindo ao seu painel!";
?>

<a href="logout.php">Sair</a>
