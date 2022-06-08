<?php

abstract class Usuario
{
    private
    string $nome, $email, $senha, $cpf;

    public function __construct(
        string $nome,
        string $email,
        string $senha,
        string $cpf,
    ) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setCpf($cpf);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = $senha;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}