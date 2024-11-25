<?php
// Iniciar a sessão
session_start();

// Verificar se o usuário está logado (se for um administrador)
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php"); // Redirecionar para a página de login se não estiver logado
    exit();
}

// Verificar se o ID do produto foi passado
if (isset($_GET['id'])) {
    $produtoId = $_GET['id'];
} else {
    echo "Produto não encontrado!";
    exit();
}

include('conexao.php');

// Buscar os dados do produto no banco
$sql = "SELECT * FROM produtos WHERE id = $produtoId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $produto = $result->fetch_assoc();
} else {
    echo "Produto não encontrado!";
    exit();
}

// Variáveis de sucesso e erro para mensagens
$produtoEditado = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegando os dados do formulário de edição
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    
    // Processar a imagem se foi enviada uma nova
    if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0) {
        $imagem_nome = $_FILES['imagem']['name'];
        $imagem_tmp = $_FILES['imagem']['tmp_name'];
        
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
            // Atualizar os dados do produto no banco
            $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco', imagem = '$imagem_nome_final' WHERE id = $produtoId";
        } else {
            echo "Erro ao enviar a imagem!";
        }
    } else {
        // Caso não haja imagem, apenas atualizar os outros campos
        $sql = "UPDATE produtos SET nome = '$nome', descricao = '$descricao', preco = '$preco' WHERE id = $produtoId";
    }

    if ($conn->query($sql) === TRUE) {
        // Produto editado com sucesso, redirecionar para a página admin.php
        header("Location: admin.php");
        exit();  // Garantir que o script seja interrompido após o redirecionamento
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
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
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a1b9a;
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
            background-color: #6a1b9a;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #9c4d97;
        }

        label {
            font-size: 16px;
        }

        .produto-editado {
            margin-top: 20px;
            text-align: center;
        }

        .produto-editado img {
            max-width: 200px;
            margin-top: 10px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Editar Produto</h2>

        <!-- Formulário de Edição -->
        <form action="editar_produto.php?id=<?php echo $produto['id']; ?>" method="POST" enctype="multipart/form-data">
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $produto['nome']; ?>" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" rows="4" required><?php echo $produto['descricao']; ?></textarea>

            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" value="<?php echo $produto['preco']; ?>" required>

            <label for="imagem">Imagem do Produto (opcional):</label>
            <input type="file" name="imagem" id="imagem" accept="image/*">

            <button type="submit">Salvar Alterações</button>
        </form>
    </div>
</body>
</html>
