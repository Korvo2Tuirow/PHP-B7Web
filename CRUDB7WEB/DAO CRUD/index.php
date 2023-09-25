<?php 

require "conn.php";
require 'dao/UsuarioDAOMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll(); 

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
            <td><?=$usuario->getId()?></td>
            <td><?=$usuario->getNome()?></td>
            <td><?=$usuario->getEmail()?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId()?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?=$usuario->getId()?>" onclick="return confirm('DESEJA REALMENTE EXCLUIR?')">[ EXCLUIR ]</a>
            </td>
        </tr>


    <?php endforeach; ?>
</table>

<br><br>
<a href="add.php">ADICIONAR USUARIO</a>



