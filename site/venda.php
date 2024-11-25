<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
    <link rel="stylesheet" type="text/css" href="venda.css">
</head>
<body>
<?php
include_once"nav.php";
?>
    <main>
        <section>
            <article>
                <h2>Opala</h2>
                <img src="https://img.olx.com.br/images/48/487449100541916.jpg" alt="Opala">
                <p>Descrição: Carro reformado com pintura nova, motor revisado, interior renovado.</p>
                <p>Preço: R$ 56.000,00</p>
                <button onclick="window.location.href='opala.php'">Comprar</button>
            </article>

            <article>
                <h2>Parati</h2>
                <img src="https://img.olx.com.br/images/34/345435793690383.jpg" alt="Parati">
                <p>Descrição: Carro reformado com suspensão nova, rodas esportivas e interior de couro.</p>
                <p>Preço: R$ 55.599,99</p>
                <button onclick="window.location.href='parati.php'">Comprar</button>
            </article>

            <article>
                <h2>Santana</h2>
                <img src="https://img.olx.com.br/images/36/361303416143816.jpg" alt="Santana">
                <p>Descrição: Pintura perolizada, bancos de couro e sistema multimídia completo.</p>
                <p>Preço: R$ 50.999,99</p>
                <button onclick="window.location.href='santana.php'">Comprar</button>
            </article>

            <article>
                <h2>Del Rey</h2>
                <img src="https://img.olx.com.br/images/33/337430782721923.jpg" alt="Del Rey">
                <p>Descrição: Veículo utilitário com motor diesel, 4x4 e pintura nova.</p>
                <p>Preço: R$ 57.999,99</p>
                <button onclick="window.location.href='delrey.php'">Comprar</button>
            </article>
        </section>
    </main>
</body>
</html>