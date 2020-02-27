<?php
// require_once 'classes/InterfaceOrcavel.php';
define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__.'/classes/Fabricante.php';
require_once  __ROOT__.'/classes/Produto.php';
include_once  __ROOT__.'/cap1/newline.php';
// criação dos objetos e armazenamento deles nas variáveis: $p1 e $f1
$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234985253');
// associação
$p1->setFabricante($f1);
// Saída
print 'A descrição do produto é: ' . $p1->getDescricao();
nl();
print 'O fabricante do produto é: ' . $p1->getFabricante()->getNome();
nl();