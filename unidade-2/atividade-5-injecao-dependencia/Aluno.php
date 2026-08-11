<?php

declare(strict_types=1);

class Aluno
{
    public function __construct(private string $nome, private float $nota)
    {
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getNota(): float
    {
        return $this->nota;
    }
}
