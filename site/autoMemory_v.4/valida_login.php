<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
 session_start();
 require_once("conexao.php");

$usuario_digitou = $_POST['nome'];
$senha_digitou = $_POST['senha'];

$sql = "SELECT * FROM cliente where nome = :nome";
$stmt = $con->prepare($sql);
$stmt->bindParam(":nome", $usuario_digitou);
$stmt->execute();
$dados = $stmt->fetch(PDO::FETCH_ASSOC);
$usuario_buscado = $dados['nome'];
$senha_buscada = $dados['senha'];

   if($usuario_buscado===$usuario_digitou && password_verify($senha_digitou, $senha_buscada)){

     $_SESSION['usuario_logado']=$usuario_digitou;
     header("location: ")

   }else{

   }
}
else{


}
header("location: login.php");

?>