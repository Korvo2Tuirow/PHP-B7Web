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
echo $parteNome."<br>"; // pega 7 caracteres apartir da segunda 

//Posição do caractere na string
$nomeCompleto = "Korvo Tuirow";
$posicao = strpos($nomeCompleto, "rvo");
echo $posicao."<br>";
if($posicao > -1){
    echo "Achou<br>";
}else{
    echo "não contem<br>";
};

$nome = "robert";
echo ucfirst($nome)."<br>"; //Deixa a primeira letra em maiuscula

$nomeCompleto = "robert lopes ramos";
echo ucwords($nomeCompleto)."<br>";//Primeira letra em maiuscula de todas as palavras

$arrayNome = explode(" ", $nomeCompleto);// transforma em arrays
print_r($arrayNome); echo"<br>";//Primeira letra em maiuscula

$numero = 10563.755;
echo number_format($numero, 2, ',', '.');//10.563,76



?>





















