<?php

declare(strict_types=1);

require_once 'Pessoa.php';
require_once 'Logavel.php';

class Aluno extends Pessoa
{
    use Logavel;

    public function __construct(string $nome, string $email, private float $nota)
    {
        parent::__construct($nome, $email);
    }

    public function exibirPerfil(): string
    {
        return "<strong>Aluno:</strong> " . htmlspecialchars($this->nome) . " | <strong>E-mail:</strong> " . htmlspecialchars($this->email) . " | <strong>Nota Final:</strong> " . number_format($this->nota, 1, ',', '.');
    }
}
