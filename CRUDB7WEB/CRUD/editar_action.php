<?php 

require "conn.php";

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$id = filter_input(INPUT_POST, 'id');


if ($email && $nome && $id){

    $sql = $pdo->prepare("UPDATE usuarios SET  nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':id', $id);
    $sql->execute();

    
    header("location: index.php");
    exit;
   

}else{
        header('location: add.php');
        exit;
}






?>
