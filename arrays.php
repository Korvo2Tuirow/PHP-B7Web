<?php 

$array = range(0, 50, 2);

foreach($array as $_key){
    echo $_key."<br>";
}

//////////////////////////////////////////////////////////

//KEY_EXISTS

$dados = [
    'nome' => 'Korvo',
    'idade' => 38,
    'empresa' => 'ifood',
    'cor'=> 'preto',
    'profissao' => 'DEV',
];

if(key_exists('idade', $dados)){
    $idade = $dados['idade'];
    echo $idade;
}else{
    echo"Idade não encontrada";
}

///////////////////////////////////////////////////////////////

?>