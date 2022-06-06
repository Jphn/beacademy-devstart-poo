<?php

include './Produto.php';
include './Aluno.php';

$p1 = new Produto();
$p1->setNome('Tênis de corrida');
$p1->setValor(250);

$p2 = new Produto();
$p2->setNome('Calça Jeans');
$p2->setValor(100);

// echo $p1->teste('café');

// var_dump($p1);
// var_dump($p2);

$a1 = new Aluno();
$a1->setCpf('12345678910');
echo $a1->getCpf();
$a1->setCpf('aaaaaaa');