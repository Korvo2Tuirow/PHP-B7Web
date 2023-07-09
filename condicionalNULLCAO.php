<?php 
$nome = "Korvo";


$nomeCompleto = $nome;

//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';

$nomeCompleto .= $sobrenome ?? "";


?>