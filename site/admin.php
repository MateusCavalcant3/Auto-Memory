<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado (se for um administrador)
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redirecionar para a página de login se não estiver logado
    exit();
}

$produtoCadastrado = false;
$produtoInfo = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('conexao.php');
    
    // Pegando os dados do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    
    // Processar a imagem
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem_nome = $_FILES['imagem']['name'];
        $imagem_tmp = $_FILES['imagem']['tmp_name'];
        $imagem_tipo = $_FILES['imagem']['type'];
        $imagem_tamanho = $_FILES['imagem']['size'];
        
        // Definir um caminho para salvar a imagem
        $diretorio = "uploads/";
        
        // Certificar-se de que o diretório de uploads existe
        if (!is_dir($diretorio)) {
            mkdir($diretorio, 0777, true);  // Cria o diretório caso não exista
        }

        // Gerar um nome único para a imagem para evitar conflitos
        $imagem_nome_final = $diretorio . uniqid() . '-' . basename($imagem_nome);

        // Movendo a imagem para o diretório de uploads
        if (move_uploaded_file($imagem_tmp, $imagem_nome_final)) {
            // Inserir os dados do produto no banco
            $sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$imagem_nome_final')";
            
            if ($conn->query($sql) === TRUE) {
                $produtoCadastrado = true;
                $produtoInfo = [
                    'nome' => $nome,
                    'descricao' => $descricao,
                    'preco' => $preco,
                    'imagem' => $imagem_nome_final
                ];
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Erro ao enviar a imagem!";
        }
    } else {
        echo "Por favor, envie uma imagem!";
    }
    
    $conn->close();
}

// Buscar os produtos cadastrados para exibir
include('conexao.php');
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);
$produtos = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 80%;
            justify-content: space-between;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 48%;
        }

        .produto-lista {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 48%;
            max-height: 500px;
            overflow-y: auto;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #B22222;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #A9A9A9;
            color: #B22222 ;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #9c4d97;
        }

        a {
            text-decoration: none;
            color: #6a1b9a;
        }

        a:hover {
            text-decoration: underline;
        }

        label {
            font-size: 16px;
        }

        .produto-cadastrado {
            margin-top: 20px;
            text-align: center;
        }

        .produto-cadastrado img {
            max-width: 200px;
            margin-top: 10px;
            border-radius: 8px;
        }

        .produto-item {
            margin: 10px 0;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .produto-item img {
            max-width: 100px;
            margin-right: 10px;
        }

        .produto-item button {
            background-color: #4caf50;
        }

        .produto-item button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Formulário de Cadastro -->
        <div class="form-container">
            <h2>Cadastrar Produto</h2>
            <form action="admin.php" method="POST" enctype="multipart/form-data">
                <label for="nome">Nome do Produto:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome do produto" required>
                
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" placeholder="Descrição do produto" rows="4" required></textarea>
                
                <label for="preco">Preço:</label>
                <input type="text" name="preco" id="preco" placeholder="Preço do produto" required>
                
                <label for="imagem">Imagem do Produto:</label>
                <input type="file" name="imagem" id="imagem" accept="image/*" required>

                <button type="submit">Cadastrar Produto</button>
            </form>

            <!-- Exibir informações do produto cadastrado -->
            <?php if ($produtoCadastrado): ?>
                <div class="produto-cadastrado">
                    <h3>Produto Cadastrado com Sucesso!</h3>
                    <p><strong>Nome:</strong> <?php echo $produtoInfo['nome']; ?></p>
                    <p><strong>Descrição:</strong> <?php echo $produtoInfo['descricao']; ?></p>
                    <p><strong>Preço:</strong> R$ <?php echo number_format($produtoInfo['preco'], 2, ',', '.'); ?></p>
                    <p><strong>Imagem:</strong></p>
                    <img src="<?php echo $produtoInfo['imagem']; ?>" alt="Imagem do produto">
                </div>
            <?php endif; ?>
        </div>

        <!-- Lista de Produtos -->
        <div class="produto-lista">
            <h2>Produtos Cadastrados</h2>
            <?php if (count($produtos) > 0): ?>
                <?php foreach ($produtos as $produto): ?>
                    <div class="produto-item">
                        <img src="<?php echo $produto['imagem']; ?>" alt="Imagem do Produto">
                        <p><strong>Nome:</strong> <?php echo $produto['nome']; ?></p>
                        <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                        <a href="editar_produto.php?id=<?php echo $produto['id']; ?>"><button>Editar</button></a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum produto cadastrado.</p>
            <?php endif; ?>
        </div>
    </div>
    
    <p><a href="logout.php">Sair</a></p> <br><br>
    <p><a href="index.php">home</a></p>


</body>
</html>
