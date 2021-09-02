<?php

function situacaoAluno(array &$turma)
{
    foreach ($turma as $chave => $aluno) {

        if ($aluno["nota"] >= 50) {
            // $class = "aprovado";
            $turma[$chave]["situacao"] = "Apavorado";
        } else {
            // $class = "reprovado";
            $turma[$chave]["situacao"] = "Delegado";
        }
    }
}
