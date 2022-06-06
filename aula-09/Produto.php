<?php

class Produto
{
	// ATRIBUTOS
	private string $nome;
	private float $valor;
	private string $desc;
	private readonly Categoria $categoria;

	public function __construct(string $nome, float $valor, Categoria $categoria)
	{
		$this->setNome($nome);
		$this->setValor($valor);
		$this->categoria = $categoria;
	}

	// MÉTODOS
	public function getNome(): string
	{
		return $this->nome;
	}

	public function setNome(string $nome): void
	{
		if (strlen($nome) <= 3)
			die('O nome deve conter no mínimo 4 caracteres.');
		$this->nome = $nome;
	}

	public function getValor(): float
	{
		return $this->valor;
	}

	public function setValor(float $valor): void
	{
		if ($valor < 0)
			die('O valor do produto não pode ser negativo!');
		$this->valor = $valor;
	}

	public function getDesc(): string
	{
		return $this->desc;
	}
	public function setDesc(string $desc): void
	{
		$this->desc = $desc;
	}

	public function teste(string $palavra): string
	{
		return "Você está testando com a palavra {$palavra}!";
	}
}