<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamentos</title>
    <link rel="stylesheet" type="text/css" href="orcamento.css">
</head>
<body>
<header>
    <img src="automemory-removebg-preview.png" alt="logo" class="img">
    <div class="title-menu-container">
        <h1>Auto Memory</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Serviços</a>
                    <ul>
                        <li><a href="venda.php">Venda</a></li>
                        <li><a href="cadastro.php">Cadastro</a></li>
                        <li><a href="orçamento.php">Orçamento</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </li>
                <li><img src="compras.png" alt="Carrinho" width="50" height="50"></li>
            </ul>
        </nav>
    </div>
</header>

    <main>
        <form action="#" method="post">
            <label for="produto">Produto:</label>
            <select id="produto" name="produto">
                <option value="carro">Carro</option>
                <option value="moto">Moto</option>
                <option value="outro">Outro</option>
            </select>

            <label for="servico">Tipo de Serviço:</label>
            <select id="servico" name="servico">
                <option value="reforma">Reforma</option>
                <option value="compra">Compra</option>
            </select>

            <label for="descricao">Descrição do Serviço:</label>
            <textarea id="descricao" name="descricao" rows="4" cols="50" placeholder="Descreva o serviço desejado..."></textarea>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Solicitar Orçamento</button>
        </form>
    </main>
</body>
</html>