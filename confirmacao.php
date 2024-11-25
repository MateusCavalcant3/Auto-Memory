<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento Recebido</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .confirmation-container {
            background-color: #fff;
            width: 80%;
            max-width: 600px;
            padding: 40px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #6a1b9a; /* Roxo */
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        .button {
            padding: 12px 30px;
            background-color: #6a1b9a; /* Roxo */
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #9c4d97; /* Roxo mais escuro */
        }

        .button-container {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="confirmation-container">
        <h2>Orçamento Recebido com Sucesso!</h2>
        <p>Um dos nossos funcionários irá avaliar o seu orçamento e entrar
            em contato para agendar um dia e horário para levar o seu carro à oficina.</p>

        <div class="button-container">
            <a href="orcamento_defeito.php" class="button">Fazer Outro Orçamento</a>
            <a href="index.php" class="button">Voltar para a Home</a>
        </div>
    </div>
</body>
</html>
