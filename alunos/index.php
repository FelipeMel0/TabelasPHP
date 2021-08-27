<?php

require("./alunos.php");

include("./funcoes.php");

situacaoAluno($alunos);



// print_r($alunos);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Nota dos alunos</title>
</head>

<body>
    <section>
        <h1>Tabela de notas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            <?php foreach ($alunos as $aluno) { ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['idade'] ?></td>
                    <td><?= $aluno['nota'] ?></td>
                    <td><?= isset($aluno['situacao']) ? $aluno["situacao"] : "" ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
</body>

</html>