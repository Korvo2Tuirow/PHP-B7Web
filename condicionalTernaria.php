<?php
$idade = 90;

$resultado = ($idade < 18) ? "menor de idade" : "maior de idade";

echo $resultado . "<br>" ;

 
/////////////////////////////////////////////////////////////////////

$menorDeIdade = ($idade > 18)? true : false;

if($menorDeIdade){
    echo "Maior de idade";
}else{
    echo "Menor de idade";
}



