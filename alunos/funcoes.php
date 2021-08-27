<?php

function situacaoAluno(array &$turma)
{
    foreach ($turma as $chave => $aluno) {

        if ($aluno["nota"] >= 50) {

            $turma[$chave]["situacao"] = "Apavorado";
            


        } else {

            $turma[$chave]["situacao"] = "Delegado";

        }
    }

    
}
