<?php
// Conectar ao banco de dados
include('conexao.php');

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar se os campos estão definidos antes de usá-los
    $nome_cliente = isset($_POST['nome_cliente']) ? $_POST['nome_cliente'] : '';
    $telefone_cliente = isset($_POST['telefone_cliente']) ? $_POST['telefone_cliente'] : '';
    $email_cliente = isset($_POST['email_cliente']) ? $_POST['email_cliente'] : '';
    $marca = isset($_POST['marca']) ? $_POST['marca'] : '';
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : '';
    $cor = isset($_POST['cor']) ? $_POST['cor'] : '';
    $placa = isset($_POST['placa']) ? $_POST['placa'] : '';
    $ano_carro = isset($_POST['ano_carro']) ? $_POST['ano_carro'] : '';
    $tipo_gasolina = isset($_POST['tipo_gasolina']) ? $_POST['tipo_gasolina'] : '';
    $defeito = isset($_POST['defeito']) ? $_POST['defeito'] : '';

    // Processar a imagem
    if (isset($_FILES['foto_carro']) && $_FILES['foto_carro']['error'] == 0) {
        $foto_nome = $_FILES['foto_carro']['name'];
        $foto_tmp = $_FILES['foto_carro']['tmp_name'];
        $foto_nome_final = 'uploads/' . basename($foto_nome);
        
        // Certificar-se de que o diretório existe
        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }
        
        // Move a imagem para o diretório de uploads
        if (move_uploaded_file($foto_tmp, $foto_nome_final)) {
            // Inserir os dados do orçamento no banco
            $sql = "INSERT INTO carros (nome_cliente, telefone_cliente, email_cliente, marca, modelo, cor, placa, ano_carro, tipo_gasolina, defeito, foto_carro) 
                    VALUES ('$nome_cliente', '$telefone_cliente', '$email_cliente', '$marca', '$modelo', '$cor', '$placa', '$ano_carro', '$tipo_gasolina', '$defeito', '$foto_nome_final')";
            
            if ($conn->query($sql) === TRUE) {
                // Redirecionar para a tela de confirmação
                header("Location: confirmacao.php");
                exit();
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Erro ao enviar a foto do carro.";
        }
    } else {
        echo "Erro: A foto do carro não foi enviada.";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamento de Defeito de Carro</title>
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
        }

        .form-container {
            background-color: #fff;
            width: 80%;
            max-width: 900px;
            padding: 40px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        h2 {
            color: #6a1b9a; /* Roxo */
            text-align: center;
            font-size: 32px;
            margin-bottom: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            color: #6a1b9a; /* Roxo */
            margin-bottom: 8px;
        }

        input, select, textarea {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            width: 100%;
        }

        input[type="file"] {
            padding: 8px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            padding: 15px;
            background-color: #6a1b9a; /* Roxo */
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #9c4d97; /* Roxo mais escuro */
        }

        .back-button {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 12px;
            background-color: #6a1b9a;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #9c4d97;
        }

        .form-group input[type="number"] {
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }

    </style>
</head>
<body>
    <div class="form-container">
        <h2>Orçamento para Defeito de Carro</h2>
        <form action="orcamento_defeito.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome_cliente">Nome do Cliente</label>
                <input type="text" id="nome_cliente" name="nome_cliente" required>
            </div>

            <div class="form-group">
                <label for="telefone_cliente">Telefone</label>
                <input type="text" id="telefone_cliente" name="telefone_cliente" required>
            </div>

            <div class="form-group">
                <label for="email_cliente">Email</label>
                <input type="email" id="email_cliente" name="email_cliente" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca do Carro</label>
                <input type="text" id="marca" name="marca" required>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo do Carro</label>
                <input type="text" id="modelo" name="modelo" required>
            </div>

            <div class="form-group">
                <label for="cor">Cor do Carro</label>
                <input type="text" id="cor" name="cor" required>
            </div>

            <div class="form-group">
                <label for="placa">Placa do Carro</label>
                <input type="text" id="placa" name="placa" required>
            </div>

            <div class="form-group">
                <label for="ano_carro">Ano do Carro</label>
                <input type="number" id="ano_carro" name="ano_carro" required>
            </div>

            <div class="form-group">
                <label for="tipo_gasolina">Tipo de Gasolina</label>
                <select id="tipo_gasolina" name="tipo_gasolina" required>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Álcool">Álcool</option>
                    <option value="Diesel">Diesel</option>
                    <option value="GNV">GNV</option>
                </select>
            </div>

            <div class="form-group">
                <label for="defeito">Defeito do Carro</label>
                <textarea id="defeito" name="defeito" required></textarea>
            </div>

            <div class="form-group">
                <label for="foto_carro">Foto do Carro</label>
                <input type="file" id="foto_carro" name="foto_carro" accept="image/*" required>
            </div>

            <button type="submit">Enviar Orçamento</button>
        </form>
        <a href="index.php" class="back-button">Voltar para Página Inicial</a>
    </div>
</body>
</html>
