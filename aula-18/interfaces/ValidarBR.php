<?php

declare(strict_types=1);

class ValidarBR implements Validar
{
	public function validarDocumento(string $cpf): void
	{
		if (strlen($cpf) != 11) die('CPF inválido!');
	}

	public function validarNome(string $nome): void
	{
		if (strlen($nome) <= 2) die('O nome é muito pequeno!');
	}

	public function validarCodigoPostal(string $codigo): void
	{
	}
}