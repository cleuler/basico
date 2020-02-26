<?php
require_once 'classes/Fabricante.php';
require_once 'classes/Produto.php';
include_once 'cap1/newline.php';
// criação dos objetos e armazenamento deles nas variáveis: $p1 e $f1
$p1 = new Produto('Chocolate', 10, 7);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234985253');
// associação
$p1->setFabricante($f1);
// Saída
print 'A descrição do produto é' . $p1->getDescricao();
nl();
print 'O fabricante do produto é' . $p1->getFabricante()->getNome();
nl();