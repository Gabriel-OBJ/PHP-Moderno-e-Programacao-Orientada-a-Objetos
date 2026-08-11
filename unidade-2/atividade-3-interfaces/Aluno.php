<?php

declare(strict_types=1);

require_once 'Avaliavel.php';

class Aluno implements Avaliavel
{
    public function __construct(private string $nome, private float $nota)
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function calcularResultado(): string
    {
        if ($this->nota >= 7.0) {
            return 'Aprovado (Média: ' . number_format($this->nota, 1, ',', '.') . ')';
        }
        return 'Reprovado/Recuperação (Média: ' . number_format($this->nota, 1, ',', '.') . ')';
    }
}
