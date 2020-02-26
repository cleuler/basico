<?php
declare(strict_types = 1);

include_once 'imc.php'; // carrega o arquivo com a função: float calcula_imc(float $peso, float $altura)

include_once 'newline.php'; // carrega o arquivo com a função new line: nl(n = num.linhas)

var_dump(calcula_imc( 75   , 1.85));
nl();
var_dump(calcula_imc('75.1', 1.85));