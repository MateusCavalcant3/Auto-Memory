<?php
include_once("conexao.php");
session_start();
?>



 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cad</title>
 <link rel="stylesheet" type="text/css" href="pag3-1.css">
 </head>
 <body>
    <header>
    <nav>

<ul>

    <li><a href="index.php">home</a></li>
    <li><a href="cadastro.php">cadastre-se</a></li>

        <a href="#">Serviços</a>
        <ul>
      <li><a href="cadastro.php">cadastro</a></li>
      <li><a href="orçamento.php">Orçamento</a></li>
      <li><a href="venda.php">Venda</a></li>
      
      <li><a href="login.php">login</a></li>
        </ul>
    </li>
</ul>
    </nav>
    </header>

         <form name="cad" method="POST" action="procad.php">
            <label for="nome">Nome</label><br>
            <input type="tex" name="nome" ><br><br>

                <label for="email">Email</label><br>
                <input type="text" name="email"><br><br>

            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" ><br><br>

            <label for="logadouro">Logadouro</label><br>
            <input type="text" name="logadouro" >

            <label for="cpf">CPF</label>
            <input type="text" name="cpf">
   
            <label for="cep">Cep</label>
            <input type="text" name="cep" >


            <label for="senha">Senha</label>
            <input type="text" name="senha">

            <input type="submit" value="Enviar" required>
        </form>
    
        </body>
        </html>