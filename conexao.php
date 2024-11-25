<?php
$servername = "localhost"; // ou o endereço do seu servidor MySQL
$username = "root"; // seu usuário MySQL
$password = ""; // sua senha MySQL
$dbname = "meu_banco"; // nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
