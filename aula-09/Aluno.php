<?php

declare(strict_types=1);

class Aluno
{
    private string $nome;
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        $this->setNome($nome);
        $this->setCpf($cpf);
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setCpf(string $cpf): void
    {
        if (!intval($cpf) || strlen($cpf) != 11)
            die('O CPF deve conter apenas números e 11 caracteres!');
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
}