<?php

include './Produto.php';
include './Categoria.php';

$c1 = new Categoria('Calçados', 'Calçados no geral.');
$c2 = new Categoria('Blusas', 'Blusas no geral.');
$c3 = new Categoria('Banho', 'Acessórios de banho.');

$p1 = new Produto('Tênis de corrida', 250);
$p2 = new Produto('Calça Jeans', 100);
$p3 = new Produto('Moletom', 100);

// echo $p1->teste('café');

var_dump($p1);
var_dump($p2);
var_dump($p3);