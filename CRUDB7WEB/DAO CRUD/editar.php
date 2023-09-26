<?php 

require "conn.php" ;
require 'dao/UsuarioDAOMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');
$usuario = false;

if($id){

   $usuario = $usuarioDao->findById($id);

}

if($usuario === false){
   header("Location: index.php");
   exit;
}

?>


<h1>EDITAR USUÁRIO</h1>

<form action="editar_action.php" method="post">

   <input type="hidden" name="id" value="<?=$usuario->getId();?>">

   <label for="nome">
    Nome:<br>
    <input type="text" name="nome" value="<?=$usuario->getNome();?>">
   </label><br><br>

   <label for="email">
    Email:<br>
    <input type="text" name="email" value="<?=$usuario->getEmail();?>">
   </label><br><br>

   <input type="submit" value="SALVAR">


</form>

