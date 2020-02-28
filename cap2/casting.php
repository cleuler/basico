<?php
define('__ROOT__', dirname(dirname(__FILE__)));
require_once __ROOT__ . '/classes/Produto.php';
include_once __ROOT__ . '/cap1/newline.php';

$p1 = new Produto('Chocolate Amargo', 100, 7);
print_r($p1);
print $p1->getDescricao() . PHP_EOL;
nl();

$vetor1 = (array)$p1;  // casting operation
print_r($vetor1);
nl();

$produto = new StdClass;
$produto->descricao = 'Chocolate Amargo';
$produto->estoque = 100;
$produto->preco = 7;

$vetor1 = (array)$produto;  // casting operation
print_r($vetor1);
print $vetor1['descricao'];
nl(2);

$vetor2 = ['descricao' => 'Café', 'estoque' => 100, 'preco' => 7]; // key => value
$produto2 = (object)$vetor2; // casting operation
print $produto2->descricao;
nl();