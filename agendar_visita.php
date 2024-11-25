<?php
// Exibir todos os erros (caso haja algum problema)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Dados do vendedor (esses podem vir de um banco de dados ou serem fixos)
$vendedor_nome = 'João Silva';
$vendedor_email = 'joaosilva@gmail.com';
$vendedor_telefone = '(11) 98765-4321';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Visita</title>
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

        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #6a1b9a;
        }

        p {
            font-size: 16px;
            margin: 10px 0;
        }

        .contact-info {
            margin: 20px 0;
            padding: 10px;
            background-color: #e1bee7;
            border-radius: 5px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .btn {
            padding: 10px 20px;
            background-color: #6a1b9a;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #9c4d97;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Entre em Contato com o Vendedor</h2>
        <p>Para agendar uma visita ao carro, entre em contato com o vendedor utilizando as informações abaixo:</p>

        <!-- Exibindo as informações do vendedor -->
        <div class="contact-info">
            <p><strong>Nome do Vendedor:</strong> <?php echo $vendedor_nome; ?></p>
            <p><strong>Email:</strong> <?php echo $vendedor_email; ?></p>
            <p><strong>Telefone:</strong> <?php echo $vendedor_telefone; ?></p>
        </div>

        <!-- Botão para voltar para a página inicial -->
        <a href="index.php" class="btn">Voltar para a Página Inicial</a>
    </div>

</body>
</html>
