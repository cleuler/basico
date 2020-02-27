<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once  __ROOT__.'/classes/Produto.php';
require_once __ROOT__.'/classes/Caracteristica.php';
include_once  __ROOT__.'/cap1/newline.php';

// criação de um objeto e armazenamento dele na variável: '$p1'
$p1 = new Produto('Chocolate', 10, 7);

// composição
$p1->addCaracteristica('Cor', 'Branco');
$p1->addCaracteristica('Peso', '2.6 Kg');
$p1->addCaracteristica('Potência', '20 watts RMS');
// Saída
print 'Produto: ' . $p1->getDescricao();
nl();
foreach ($p1->getCaracteristicas() as $c) {
    print '  Caracteristica: ' . $c->getNome() . ' - ' . $c->getValor();
    nl();
}
