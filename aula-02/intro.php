<?php

include 'Aluno.php';
include 'Curso.php';

$aluno = new Aluno();
$aluno->nome = 'João Pedro';
$aluno->cpf = '109.876.543-21';

$curso = new Curso();
$curso->nome = 'Introdução ao PHP';
$curso->cargaHoraria = 88;
$curso->desc = 'Aprender PHP.';

$aluno1 = [
    'aluno' => 'Alessandro',
    'cpf' => '123.456.789-10',
];

$aluno2 = [
    'Aluno' => 'André',
    'Cpf' => '123.456.789-10',
];

$aluno3 = [
    'ALUNO' => 'Ana',
    'CPF' => '123.456.789-10',
];

var_dump( $aluno );