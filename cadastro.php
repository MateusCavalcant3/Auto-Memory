<?php
 include_once "conexao.php";
if(isset($_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['logadouro'],$_POST['cpf'],$_POST['cep'])){
    $name=$_POST['nome'];
    $email=$_POST['emaill'];
    $tel=$_POST['telefone'];
    $log=$_POST['logadouro'];
    $cpf=$_POST['cpf'];
    $cep=$_post['cep'];
   
    $stmt=$conn->prepare("insert into cliente(nome,email,telefone,logadouro,cpf)values(?,?,?,?,?)");
    $stmt->bindParam(1,$name);
    $stmt->bindParam(2,$email);
    $stmt->bindParam(3,$tel);
    $stmt->bindParam(4,$log);
    $stmt->bindParam(5,$cpf);
    $stmt->bindParam(6,$cep);
    
    if($stmt->execute()) {
        echo "Cadastro feita com sucesso!";
    } else {
        echo "Erro ao realizar o cadastro";
    }

}

?>
         <form name="cad">
            <label for="nome">Nome</label><br>
            <input type="tex" id="nome" name="nome" ><br><br>

                <label for="email">Email</label><br>
                <input type="text" id="email"name="email" require><br><br>

            <label for="telefone">Telefone</label><br>
            <input type="number" id="telefone" name="telefone" ><br><br>

            <label for="logadouro">Logadouro</label><br>
            <input type="text" id="logadouro" name="logadouro" >

            <label for="cpf">CPF</label>
            <input type="number" id="bairro" name="cpf">
   
            <label for="cep">Cep</label>
            <input type="text" id="cep" name="cep" >


            <input type="submit" value="Enviar">
        </form>
    