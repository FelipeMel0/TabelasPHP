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

function alterarNota(array &$turma, $nome, $novaNota)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
            return;
        }
    }
}