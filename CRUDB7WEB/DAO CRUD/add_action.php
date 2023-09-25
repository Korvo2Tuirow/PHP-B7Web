<?php 
require "conn.php";
require 'dao/UsuarioDAOMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);




if ($email && $nome){

   if($usuarioDao->findByEmail($email) === false){
    $novoUsuario = new Usuario();
    $novoUsuario->setNome($nome);
    $novoUsuario->setEmail($email);

    $usuarioDao->add($novoUsuario);
    
    header("location: index.php");
    exit;

   }else{
    header("location: add.php");
    exit;
   }

   

}else{
        header('location: add.php');
        exit;
}






?>