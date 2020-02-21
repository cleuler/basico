<?php
/**
 * php: programando com orientação a objetos
 * DALL'OGLIO Pablo. PHP: programando com orientação a objetos. 4. ed. São Paulo: Novatec, 2019.
 *
 * 1 Introdução ao PHP
 * 1.4 Variáveis (p. 28-37)
 */

$nome = "João";
$sobrenome = 'da Silva';
echo "$sobrenome, $nome"; // com áspas duplas mesclam-se os conteúdos das variáveis com a vírgula e o espaço
echo '<br>';              // para pular para próxima linha da saída
echo '$sobrenome, $nome'; // com apóstrofe NÃO se mesclam os conteúdos das variáveis com a vírgula e o espaço
echo '<br>';

function nl($n = 1)       // para pular n linhas na saída (web display)
{
    for ($i = 1; $i <= $n; $i++){
        echo '<br>';
    }
    return;
}

nl(2); // pula duas linhas na web display
echo "$sobrenome, $nome";
nl(2);
echo "variáveis variantes (variable variables): $$";
nl();
// define o nome da variável
$variavel = 'nome';
// cria variavel identificada pelo conteúdo de $variavel
$$variavel = 'Maria'; // === $nome = 'Maria';
// exibe o conteúdo da variável $nome na tela
echo $nome; // resultado = Maria


