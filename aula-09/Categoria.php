<?php

declare(strict_types=1);

class Categoria
{
	public function __construct(private string $nome, private string $desc)
	{
	}

	public function getNome(): string
	{
		return $this->nome;
	}

	public function setNome(string $nome): void
	{
		$this->nome = $nome;
	}
}