<?php
define('__ROOT__', dirname(dirname(__FILE__)));
include_once __ROOT__ . '/cap1/newline.php';

$produto = array();
$produto['descricao'] = 'Chocolate Amargo';
$produto['estoque'] = 100;
$produto['preco'] = 7;
print_r($produto);
nl();

$objeto = new stdClass;

foreach ($produto as $chave => $value) {
    $objeto->$chave = $value;
}
print_r($objeto);