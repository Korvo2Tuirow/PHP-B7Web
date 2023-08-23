<?php 


//Escrever

$texto = "Korvo Tuirow";
file_put_contents('nome.txt', $texto);
echo $texto . "<br>";

$texto .="\n RObert Lopes";
file_put_contents('nome.txt', $texto);
echo $texto . "<br>";



//LER

$texto = file_get_contents('nome.txt');
$texto = explode("\n", $texto);

echo"Quantidades de linhas ". count($texto);







?>