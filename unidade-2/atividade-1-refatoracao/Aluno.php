<?php

declare(strict_types=1);

class Aluno
{
    public string $nome;
    public float $nota;

    public function __construct(string $nome, float $nota)
    {
        $this->nome = $nome;
        $this->nota = $nota;
    }

    public function verificarSituacao(): string
    {
        if ($this->nota >= 7.0) {
            return 'Aprovado';
        } elseif ($this->nota >= 4.0) {
            return 'Recuperação';
        } else {
            return 'Reprovado';
        }
    }
}
