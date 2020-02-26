<?php
/*
 * calcula_imc
 * função que calculo o IMC - Índice de Massa Corporal de uma pessoa
 * Entrada:
 *         float $peso   = peso em kilogramas (kg)
 *         float $altura = altura em metros   (m)
 * Processamento:
 *         fórmula: imc = $peso / ($altura ^ 2).
 *
 * Saída:
 *         float = Retorna o valor do imc arredondado para duas casas decimais.
 */

function calcula_imc(float $peso, float $altura): float {
    var_dump($peso, $altura);
    return round($peso / ($altura * $altura), 2);
}