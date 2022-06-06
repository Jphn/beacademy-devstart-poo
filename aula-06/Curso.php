<?php

declare(strict_types = 1)
;

class Curso
{
    private string $nome;
    private int $cargaHoraria;
    private string $desc;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    public function getDesc(): string
    {
        return $this->desc;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setCargaHoraria(int $cargaHoraria): void
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function setDesc(string $desc): void
    {
        $this->desc = $desc;
    }

}