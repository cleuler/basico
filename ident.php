<?php
include_once 'newline.php'; // carrega o arquivo com a função new line: nl(n = num.linhas)
$a =  1234;
$b = '1234';
print "a = $a";
nl(1);
print "b = $b";
nl(1);

if ($a == $b) {
    echo '$a e $b são iguais';
}
else {
    echo '$a e $b são diferentes';
}
nl(1);

if ($a === $b) {
    echo '$a e $b são idênticos';
    nl(1);
}
else { if ($a == $b) {
        echo '$a e $b não são idênticos (tipos diferentes), mas são iguais (mesmos conteúdos conversíveis a um mesmo tipo)';
        nl(1);
        } else {
        echo '$a e $b são de tipos e de conteúdos diferentes';
        nl(1);
        }
}

var_dump($a, $b);
