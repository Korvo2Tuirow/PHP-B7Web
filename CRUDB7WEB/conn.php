<?php 

//$pdo = new PDO("mysql:dbname=test; host=localhost", "root","");


$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';

$pdo = new PDO("mysql:dbname=".$db_name."; host=".$db_host, $db_user, $db_password);

?>