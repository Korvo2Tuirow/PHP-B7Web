<?php 
$host = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'cadastro';

$connect = mysqli_connect($host, $usuario, $senha, $database);

$MSG = ($connect)? "CONECTADO" : "ERRO";
echo $MSG;

$sql = "SELECT nome, profissao FROM gafanhotos where id like 15";

$query = mysqli_query($connect, $sql);




echo "<pre>";

/*while($resultado = mysqli_fetch_array($query)){
    echo"id = ". $resultado[0]."<br>". $resultado[1]."<br>".$resultado[2]."<br>". $resultado[3]."<br>". $resultado[4]."<br>". $resultado[5]."<br>". $resultado[6]."<br>". $resultado[7]."<br>". $resultado[8]."<br> <br>";
};*/


$resultado = mysqli_fetch_all($query);
    print_r ($resultado);


echo "</pre>";

?>