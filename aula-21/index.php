<?php

include __DIR__ . './vendor/autoload.php';

use Dompdf\Dompdf;
use Classes\Config\Usuario as ConfigUsuario;
use Classes\Usuario;


// include 'classes/Categoria.php';
// include 'classes/Cliente.php';
// include 'classes/Gestor.php';
// include 'classes/Produto.php';
// include 'classes/Usuario.php';
// include 'classes/config/Usuario.php';



$us1 = new ConfigUsuario();
$us2 = new Usuario();

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '';

for ($i = 1; $i <= 10; $i++) {
	$html .= 'Down!<br>';
}

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('beacademy.pdf', [
	'Attachment' => 0,
]);