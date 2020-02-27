<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once  __ROOT__.'/classes/Produto.php';
require_once __ROOT__.'/classes/Caracteristica.php';
include_once  __ROOT__.'/cap1/newline.php';

// criação de um objeto e armazenamento dele na variável: '$p1'
$p1 = new Produto('Chocolate', 10, 5);
unset($p1);
$p2 = new Produto('Café', 100, 7);
unset($p2);