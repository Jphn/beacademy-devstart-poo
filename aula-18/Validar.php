<?php

abstract class Validar
{
	public static function validarCpf(string $cpf): void
	{
		if (!intval($cpf) || strlen($cpf) != 11)
			die('O CPF deve conter apenas números e 11 caracteres!');
	}
}