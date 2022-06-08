<?php

declare(strict_types=1);

class Gestor extends Usuario
{
    private float $salario;
    private string $horario;

    public function __construct(string $nome, string $email, string $senha, string $cpf, float $salario, string $horario)
    {
        parent::__construct($nome, $email, $senha, $cpf);
        $this->setSalario($salario);
        $this->setHorario($horario);
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function getHorario(): string
    {
        return $this->horario;
    }

    public function setHorario(string $horario): void
    {
        $this->horario = $horario;
    }
}