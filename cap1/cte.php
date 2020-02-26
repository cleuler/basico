<?php
define('Pi' , 3.14159265358979323846);
define('e'  , 2.7182818284590452354);
define('Phi', 1.61803399);

include_once 'newline.php'; // carrega o arquivo com a função new line: nl(n = num.linhas)
print 'Pi/Phi = ';
print_r(Pi / Phi);
nl(1);
print "Conferir lista das constantes do PHP: ";
echo '<a href="https://www.php.net/manual/pt_BR/math.constants.php">math.constants.php</a>';
nl(1);