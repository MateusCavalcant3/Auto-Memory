<?php

$servidor = 'localhost';
$usuario = 'root';
$senha_usu = '';
$db_nome = 'oficina';


try{

    $con = new PDO("mysql:host=$servidor;dbname=$db_nome",$usuario,$senha_usu);
    /*$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERROMODE_EXCEPTION);*/


}catch(PDOExection $msg){


    echo "Erro de conexão com o banco de dados". $msg->getMenssage(); 

}

?>