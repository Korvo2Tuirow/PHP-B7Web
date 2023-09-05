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






















?>