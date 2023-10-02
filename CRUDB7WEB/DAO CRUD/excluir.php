<?php 

require "conn.php";
require 'dao/UsuarioDAOMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);


$id = filter_input(INPUT_GET, 'id');


if ($id){

    $usuarioDao->delete($id);

    
}

header("location: index.php");
exit;

?>
