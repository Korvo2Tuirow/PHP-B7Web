<?php 

require "../conn.php";

$slq = $pdo->query("SELECT * FROM usuarios");

if($slq->rowCount() > 0){
    
    $lista = $slq->fetchAll(PDO::FETCH_ASSOC);

}



?>

<h1>LISTA DE USUÁRIOS</h1>
<br>

<table border="1" width="100%">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id']?></td>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['email']?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id']?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?=$usuario['id']?>">[ EXCLUIR ]</a>
            </td>
        </tr>


    <?php endforeach; ?>
</table>

<br><br>
<a href="add.php">ADICIONAR USUARIO</a>



