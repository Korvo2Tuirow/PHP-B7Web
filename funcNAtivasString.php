<?php 

$nome = "     Korvo   ";

echo trim($nome)."<br>";//retira os espaços;

echo strlen($nome)."<br>";// conta os caracteres

echo strtolower($nome)."<br>";// deixa tudo minusculo

echo strtoupper($nome)."<br>";// deixa tudo maiusculo

$nome = "Korvo Tuirow ";
$nomeAlterado = str_replace("Korvo", "Robert",$nome);
echo $nomeAlterado."<br>";// substitui um pelo outro(pode ser apenas letras tb)

$parteNome = substr($nome, 2 , 7);
echo $parteNome; // pega 7 caracteres apartir da segunda 





























?>