<?php 
echo time();

echo"<br><br>";

date_default_timezone_set('America/Sao_Paulo');

echo date('D d/F/Y H:i:s');
echo"<br><br>";

$data1  = '2023-08-05';
echo date('w d/m/Y', strtotime($data1));
echo"<br><br>"; 
 
//////////////////////////////////////////////////////////////////////////////

//Exercicio

function diaDaSemana(){
    
$diasDaSemana = ["Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sabado"];

    $data = "2023-08-15";
    $i=date('w', strtotime($data));
    echo $data ." ".
    $diasDaSemana[$i];
    
};
diaDaSemana();
