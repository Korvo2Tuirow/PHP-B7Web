<?php 

$ingredientes = [
    "açucar",
    "ovo",
    "fermento",
    "leite",
    "chocolate"
];

echo "<ul>";
foreach ($ingredientes as $chave => $valor) {
    echo "<li>Item: ".($chave+1).": ".$valor."</li>";
}
echo "</ul>";





?>