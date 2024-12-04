<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" type="text/css" href="venda.css">
</head>
<body>
    <header>
        <h1> <img src="automemory-removebg-preview.png" alt="logo" width="200" height="170"> Auto Memory </h1>
        <nav>
            <ul>
                <li><a href="index.php">Quem Somos</a></li>
                <li>
                    <a href="#">Serviços</a>
                    <ul>
                        <li><a href="cadastro.php">Cadastro</a></li>
                        <li><a href="orçamento.php">Orçamento</a></li>
                        <li><a href="venda.php">Venda</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <article>
                <h2>Opala</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT3UTs8knT7ryUc_UFRljFXZ-wU7auI3moUQ&s" alt="Opala">
                <p>Descrição: Carro reformado com pintura nova, motor revisado, interior renovado.</p>
                <p>Preço: R$ 100.000,00</p>
                <button onclick="window.location.href='compra_corolla.php'">Comprar</button>
            </article>

            <article>
                <h2>Parati</h2>
                <img src="https://i0.statig.com.br/bancodeimagens/5d/f7/tz/5df7tz8cxtswg7i9tqcei6uk2.jpg" alt="Parati">
                <p>Descrição: Carro reformado com suspensão nova, rodas esportivas e interior de couro.</p>
                <p>Preço: R$ 80.000,00</p>
                <button onclick="window.location.href='compra_sandero.php'">Comprar</button>
            </article>

            <article>
                <h2>Santana</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4kM0_Q-qCLkmTuNmDH8uIYdAY-qPZBQ8N2A&s" alt="Santana">
                <p>Descrição: Pintura perolizada, bancos de couro e sistema multimídia completo.</p>
                <p>Preço: R$ 120.000,00</p>
                <button onclick="window.location.href='compra_civic.php'">Comprar</button>
            </article>

            <article>
                <h2>Del Rey</h2>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_t5SKpRLQ5aKxFt0LJ96OJ0r6poPPhLVxXw&s" alt="Del Rey">
                <p>Descrição: Veículo utilitário com motor diesel, 4x4 e pintura nova.</p>
                <p>Preço: R$ 150.000,00</p>
                <button onclick="window.location.href='compra_toro.php'">Comprar</button>
            </article>
        </section>
    </main>
</body>
</html>