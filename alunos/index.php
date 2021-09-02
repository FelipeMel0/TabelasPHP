<?php

require("./alunos.php");

include("./funcoes.php");

if (isset($_GET["novaNota"])) {
    $nome = $_GET["nomeAluno"];
    $nota = $_GET["novaNota"];
    alterarNota($alunos, $nome, $nota);
}

situacaoAluno($alunos);

// print_r($alunos);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js" defer></script>
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
            <?php foreach ($alunos as $aluno) {

                $aluno["nota"] >= 50 ? $class = "aprovado" : $class = "reprovado"

            ?>
                <tr onclick="showFormNota('<?= $aluno['nome'] ?>')">
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['idade'] ?></td>
                    <td><?= $aluno['nota'] ?></td>
                    <td class="<?= "$class" ?>"><?= isset($aluno['situacao']) ?
                                                    $aluno["situacao"] : "" ?></td>
                </tr>
            <?php } ?>
        </table>
    </section>
    <div class="container-form-nota">
        <form>
            <input type="number" placeholder="Digite a nova nota" name="novaNota">
            <input type="hidden" id="nomeAluno" name="nomeAluno">
            <button>Alterar</button>
        </form>
    </div>

</body>

</html>