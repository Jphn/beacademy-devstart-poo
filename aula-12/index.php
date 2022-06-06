<?php

include 'Usuario.php';
include 'Gestor.php';
include 'Cliente.php';

$g1 = new Gestor('Geraldo', 'geraldo@mail.com', 'senha', '12345678910', 4000, '12:00');

// $c1 = new Cliente();
// $c1->setNome('Chico');

var_dump($g1);
// var_dump($c1);