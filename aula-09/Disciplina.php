<?php

declare(strict_types = 1)
;

class Disciplina
{
    private string $nome;

    public function __construct(string $nome)
    {
        $this->setNome($nome);
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