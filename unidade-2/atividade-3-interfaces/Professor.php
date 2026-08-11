<?php

declare(strict_types=1);

require_once 'Avaliavel.php';

class Professor implements Avaliavel
{
    public function __construct(private string $nome, private int $turmasAvaliadas)
    {
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function calcularResultado(): string
    {
        if ($this->turmasAvaliadas >= 3) {
            return 'Desempenho Excelente (' . $this->turmasAvaliadas . ' turmas avaliadas)';
        }
        return 'Desempenho Regular (' . $this->turmasAvaliadas . ' turmas avaliadas)';
    }
}
