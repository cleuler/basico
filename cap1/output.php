<?php

echo 'Saída'.'<br>';
echo 'a' . '<br>' . PHP_EOL;
echo 'b' . '<br>' . PHP_EOL;
echo '<br>';

print 'Teste'.'<br>';
print '<br>';

$variavel = 10; // cria uma variável numérica inteira
print '$variavel = 10;'.'<br>';
print 'Resultado da linha de comando "var_dump($variavel);" é:'.'<br>';
var_dump($variavel); // essa função executa um PHP_EOL após exibir seu resultado

print 'Resultado da linha de comando "print_r($variavel);" é:'.'<br>';
print_r($variavel); // essa função NÃO executa um PHP_EOL após exibir seu resultado
print '<br>';

print '<br>';
/* cria um vetor do tipo string com 4 posições */
$vetor = array('Palio', 'Gol', 'Fiesta', 'Corsa');
print '$vetor = array(\'Palio\', \'Gol\', \'Fiesta\', \'Corsa\');'.'<br>';

print 'Resultado da linha de comando "var_dump($vetor);" é:'.'<br>';
var_dump($vetor);

print 'Resultado da linha de comando "print_r($vetor);" é:'.'<br>';
print_r($vetor);
print ', mas essa função NÃO executa um PHP_EOL após exibir seu resultado.';