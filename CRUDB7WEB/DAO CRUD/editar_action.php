<?php 

require "conn.php" ;
require 'dao/UsuarioDAOMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$id = filter_input(INPUT_POST, 'id');


if ($email && $nome && $id){

    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($nome);
    $usuario->setEmail($email);
    
    $usuarioDao->update($usuario);    
    header("location: index.php");
    exit;
   

}else{
        header('location: editar.php?id='.$id);
        exit;
}






?>
