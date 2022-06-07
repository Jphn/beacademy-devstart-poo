<?php

include 'Validar.php';
include 'ValidarBR.php';
include 'ValidarUS.php';

$br = new ValidarBR();
$us = new ValidarUS();

$cpf = '12345678912';
$doc = '1234567891234';

$br->validarDocumento($cpf);
$us->validarDocumento($doc);