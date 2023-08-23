<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ler e Ecrever nomes</title>
</head>

<body>

    <form method="post">
        <label for="nome">Novo Nome:</label><br>
        <input type="text" name="nome">
        <input type="submit" value="Adicionar">
    </form>

    <h1>Lista de nomes</h1>
    <ul>
        <?php

        $input_name = filter_input(INPUT_POST, 'nome');

        if ($input_name == NULL) {

            echo "<script>alert('ESCREVA UM NOME!!')</script>";

            $nomes = file_get_contents('nomes.txt');

            echo $nomes;
        } else {

            $nomes = file_get_contents('nomes.txt');

            file_put_contents('nomes.txt', "\n<li>" . $input_name . "</li>");


            $nomes .= "\n<li>" . $input_name . "</li>";


            file_put_contents('nomes.txt', $nomes);

            $nomes = file_get_contents('nomes.txt');

            echo $nomes;
        };

        ?>

    </ul>

</body>

</html>