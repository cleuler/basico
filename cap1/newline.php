<?php
/*
 * newline
 * função que pula n linhas no display de saída
 * Entrada:
 *         $n = número de linhas a pular
 * Saída:
 *         Não retorna um valor.
 *         Só executa a ação de pular n linhas no display.
 */

function nl($n = 1): void
{   // para pular n linhas na saída (web display)
    for ($i = 1; $i <= $n; $i++) {
        echo PHP_EOL;
    }
    return;
}