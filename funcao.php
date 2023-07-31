<?php 
function subsequente(){

    for($q=0; $q <10; $q++){
        echo $q."<br>";
    }; 

};

subsequente();


//Parametros: Definição normal

function somar($n1, $n2){
    
    $total = $n1 + $n2; 
    
    return $total; 

}

$soma = somar(5, 10);
echo "TOTAL: ".$soma."<br>";


//Parametros: Type e valor padrão

function somar2(int $n1, int $n2, int $n3 = 0){
    
    $total2 = $n1 + $n2 + $n3; 
    
    return $total2; 

}

echo somar2(5, 2);

//Parametros: Referência ou valor





//FUNÇÃO ANONNIMA

$dizimo = function(int $valor){
return $valor * 0.1;
};

$funcao = $dizimo;

echo $dizimo(70);

//arrow function php +7.4 

$dizimo2 = fn($valor2) => $valor2 * 0.5;
 
echo $dizimo2(55);

//Função Recursiva

function dividir($num){
    
    $metade = $num / 2;
    echo $num ."<br>";

    if(round($metade)>0){
        dividir($metade);
    }
}

dividir(100);


//Função nativas de matematica

//valor absoluto

$numeroAbsoluto = -8.4;

echo"<br>". abs($numeroAbsoluto);

//valor pi

echo "<br>".pi();

//arrendondar para baixo
$numero = 2.7486;
echo "<br>".floor($numero);

//arredonda para cima
echo "<br>".ceil($numero);

//natural arredonda para cima ou para baixo

echo "<br>".round($numero);

echo "<br>".round($numero, 2);// arredonda as casas decimais ,com 2 casas decimais

//valor aleatório

$aleatorio = rand(0, 100);
echo "<br>" . $aleatorio;

//max e minimo da lista
$lista = [1, 4, 6, 8, 11, 58, 48, 55, 77, 26];

echo "<br>" . max($lista); // pega o numero maior 

echo "<br>" . min($lista);// pega o numero menor


/////////////////////////////////////////////////////////////





?>