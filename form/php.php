<?php 
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL); 

if($nome && $senha && $email){

setcookie('nome', $nome, time()+86400);//APAGAR setcookie('nome','', time()-3600);

echo $nome."<br/>";
echo $senha ."<br/>";
echo $email;

}

?>