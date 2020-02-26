<?php
include_once 'newline.php'; // carrega o arquivo com a função new line: nl(n = num.linhas)
if ($a =  1234){
    echo 'Essa operação if ($a =  1234) {...} atribui  1234 à variável $a';
    nl(1);
}
$b = '1234';
print "a = $a";
nl(1);
print "b = $b";
nl(1);

if ($a == $b) {
    echo '$a e $b são iguais (==)';
}
else {
    echo '$a e $b são diferentes (!=)';
}
nl(1);

if ($a === $b) {
    echo '$a e $b são idênticos (===)';
    nl(1);
}
else { if ($a == $b) {
        echo '$a e $b não são idênticos (!===), pois pertencem a tipos diferentes, mas são iguais (==), pois apresentam mesmos conteúdos conversíveis a um mesmo tipo)';
        nl(1);
        } else {
        echo '$a e $b são de tipos e de conteúdos diferentes';
        nl(1);
        }
}

var_dump($a, $b);
