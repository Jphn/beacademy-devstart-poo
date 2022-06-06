<?php

declare(strict_types = 1)
;

class Professor
{
    private string $nome;
    private string $sobrenome;
    private string $cpf;
    private float $salario;
    private array $disciplinas;


    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setSobrenome(string $sobrenome): void
    {
        $this->sobrenome = $sobrenome;
    }

    public function setCpf(string $cpf): void
    {
        if (!intval($cpf) || strlen($cpf) != 11)
            die('O CPF deve conter apenas números e 11 caracteres!');
        $this->cpf = $cpf;
    }

    public function setSalario(float $salario): void
    {
        if ($salario < 0)
            die('O salário não pode ser negativo!');
        $this->salario = $salario;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }
}