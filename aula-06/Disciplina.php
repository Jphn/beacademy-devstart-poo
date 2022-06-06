<?php

declare(strict_types = 1)
;

class Disciplina
{
    public string $nome;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}