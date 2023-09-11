<?php 

$array = range(0, 50, 2);

foreach($array as $_key){
    echo $_key."<br>";
}

echo "<hr>";
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
    echo "A idade é ".$idade;
}else{
    echo"Idade não encontrada";
}

echo "<hr>";
///////////////////////////////////////////////////////////////


$chaves = array_keys($dados);

echo"<pre>";

print_r($dados);

print_r ($chaves);

echo "<br>";

$valores = array_values($dados);
print_r($valores);

echo "<hr>";

///////////////////////////////////////////////////////////////



?>

<table border="1">

    <?php foreach($dados as $chaves => $valores):?>
        <tr>
            <th><?php echo $chaves;?></th>
            <td><?php echo $valores;?></td>
        </tr>


    <?php  endforeach?>

</table>

<hr>

<table border="1">
<?php 
echo "<tr>";
foreach(array_keys($dados) as $chave){
echo"
<th>".$chave."</th>";};
echo "</tr>";
echo "<tr>";
foreach(array_values($dados) as $valor){
    echo"
    <td>".$valor."</td>";};
    echo "</tr>";
?>
</table>

<hr/>

<?php 

//////////////////////////////////////////////////////////


$array = ["a", "b", "c", "d", "e"];
print_r($array);

$retorno = array_slice($array, 1, 3);

print_r($retorno);
echo "<br/>";

$retorno = array_slice($array, -3, 2);

print_r($retorno);

echo "<hr/>";
//////////////////////////////////////////////////


array_splice($array, 1, 2, ["k", 100]);
print_r($array);

echo "<hr/>";

////////////////////////////////////////////////////

$array = [
    [
        'id' => 1,
        'produto' => 'arroz',
        'valor' => 10.55
    ],
    [
        'id' => 2,
        'produto' => 'açucar',
        'valor' => 22.63
    ],
    [
        'id' => 3,
        'produto' => 'sal',
        'valor' => 9
    ],

];


function soma($total, $item){
    $total += $item['valor'];
    return $total; 
};

$total = array_reduce($array,'soma');

print_r($total);

echo "<hr>";

////////////////////////////////////////////////

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$total = array_sum($numeros);
echo $total;

echo "<hr>";

/////////////////////////////////////////////////

$arrays = ["uva", "vermelho", "Gol" ];

list($fruta, $cor, $carro) = $arrays;

echo "FRUTA = " . $fruta . "<br/>";
echo "COR = " . $cor . "<br/>";
echo "CARRO = " . $carro . "<br/>";

echo "<hr/>";

////////////////////////////////////////////////////












?>