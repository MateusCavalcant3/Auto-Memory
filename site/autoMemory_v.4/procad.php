<?php

if(isset($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['logadouro'],$_POST['cpf'],$_POST['cep'],$_POST['senha'])){

    $name = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $log = $_POST['logadouro'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $senha = $_POST['senha'];
    $hash_senha = password_hash($senha, PASSWORD_DEFAULT);
   include_once "conexao.php";
    $stmt = $conn->prepare ("INSERT INTO cliente(nome, email, telefone, logadouro, cpf, id_cep) VALUES (?, ?, ?, ?, ?, ?)");
    

    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $tel);
    $stmt->bindParam(4, $log);
    $stmt->bindParam(5, $cpf);
    $stmt->bindParam(6, $cep);

    if ($stmt->execute()) {
        echo "<strong>Cadastro feito com sucesso!<strong><hr>";
    } else {
        echo "Erro ao realizar o cadastro";
    }
}

?>

























    


