<?php


require 'classe1.php';
require 'classe2.php';

//use Classe2\MinhaClasse as MinhaClasse2;

$a = new classe1\MinhaClasse();
echo $a->testar();

/*
$b= new MinhaClasse2();
echo $a->testar();
*/
?>