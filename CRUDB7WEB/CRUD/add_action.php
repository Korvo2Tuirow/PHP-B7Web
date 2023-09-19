<?php 
require "../conn.php";

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
/*
$verificar = $pdo->query("SELECT email FROM usuarios WHERE email = '$email'");

if ($verificar->rowCount() == 1) {

  

    echo "<script>alert('EMAIL JÁ EXISTENTE !');</script>";

    echo '<a href="add.php">VOLTAR</a>';

   
}else{
*/

if ($email && $nome){

   // $pdo->query("INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')");

   $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
   $sql->bindValue(':email',$email);
   $sql->execute();

     if($sql->rowCount() == 0){

    $slq = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");
    $slq->bindValue(':name', $nome);
    $slq->bindValue(':email',$email);
    $slq->execute();

     header('location: index.php');
    exit;

    }else{
    header('location: add.php');
    exit;
    }

}else{
        header('location: add.php');
        exit;
}






?>