<?php

class GestorGeral extends Gestor
{
	private float $bonusAnual;

	public function __construct(string $nome, string $email, string $senha, string $cpf, float $salario, string $horario, float $bonusAnual)
	{
		parent::__construct($nome, $email, $senha, $cpf, $salario, $horario);
		$this->setBonusAnual($bonusAnual);
	}

	public function getBonusAnual(): float
	{
		return $this->bonusAnual;
	}

	public function setBonusAnual(float $bonusAnual): void
	{
		$this->bonusAnual = $bonusAnual;
	}
}