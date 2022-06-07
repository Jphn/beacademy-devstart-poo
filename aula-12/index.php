<?php

include 'Usuario.php';
include 'Gestor.php';
include 'Cliente.php';
include 'Validar.php';

$cpf = '12345678910';

Validar::validarCpf($cpf);

$g1 = new Gestor('Geraldo', 'geraldo@mail.com', 'senha', $cpf, 4000, '12:00');

// $c1 = new Cliente();
// $c1->setNome('Chico');

var_dump($g1);
// var_dump($c1);