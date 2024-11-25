<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('conexao.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario_id'] = $usuario['id'];
            header("Location: admin.php"); // Redireciona para a página do painel
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a1b9a; /* Cor roxa */
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #6a1b9a; /* Cor roxa */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #9c4d97; /* Cor roxa mais escura */
        }

        a {
            text-decoration: none;
            color: #6a1b9a;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    </div>
</body>
</html>
