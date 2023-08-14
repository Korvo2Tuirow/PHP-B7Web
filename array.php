<?php 

$lista = ['nome1','nome2', 'nome3', 'nome4', 'nome5'];

echo "TOTAL:" . count($lista)."<br>";// contagem de arrays

/////////////////////////////////////////////////////////

$alunos = ["Korvo", "Robert", "José", "Aline", "Ana", "Maria"];
$aprovados = ["Robert", "Aline", "Ana", "Maria"];

$reprovados  = array_diff($alunos, $aprovados);// mostra a diferença entre os dois arrays

print_r($reprovados);
echo "<br><br>";

///////////////////////////////////////////////////////////

$numeros = [10, 20, 24, 91, 18, 55, 33];

$filtrados = array_filter($numeros, function($item){

    if($item < 30){
        return true;   
    }else{
        return false;
    }

});

print_r($filtrados);
echo "<br><br>";

/////////////////////////////////////////////////////////////

$dobrados = array_map(function ($n){

    return $n * 2;

},$numeros);

print_r($numeros);
echo "<br>";
print_r($dobrados);
echo "<br><br>";

///////////////////////////////////////////////////////////////

array_pop($numeros);//remove o ultimo item do array
array_shift($numeros);//remove o primeiro item do array

////////////////////////////////////////////////////////////////


if(in_array(90, $numeros)) {
    
    echo"Existe";
    }else{
        echo"Não Existe"; ///faz uma busca dentro do array

    };
    echo"<br><br>";
////////////////////////////////////////////////////////////////

$pos = array_search( 18, $numeros);
echo $pos . "<br><br>"; //mosrta a posição do array

//////////////////////////////////////////////////////////////

asort($numeros);
print_r($numeros);  //ordem crescente mantendo a chave
echo "</br><br>";

sort($numeros);
print_r($numeros);  //ordem crescente
echo "</br><br>";

arsort($numeros);
print_r($numeros);  //ordem decrescente mantendo a chave
echo "</br><br>";

rsort($numeros);
print_r($numeros); //ordem decrescente
echo "</br><br>";

/////////////////////////////////////////////////////////////////

$nomes = ["Robert", "Lopes", "Ramos"];

$nome = implode(" ", $nomes);

echo $nome;
echo"<br><br>";




















?>