<?php

declare(strict_types=1);

class ValidarUS implements Validar
{
	public function validarDocumento(string $documento): void
	{
		if (strlen($documento) != 13) die('Documento inválido!');
	}

	public function validarNome(string $nome): void
	{
		if (strlen($nome) <= 2) die('O nome é muito pequeno!');
	}

	public function validarCodigoPostal(string $codigo): void
	{
	}
}