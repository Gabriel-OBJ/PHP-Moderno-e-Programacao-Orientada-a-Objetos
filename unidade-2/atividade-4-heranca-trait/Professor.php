<?php

declare(strict_types=1);

require_once 'Pessoa.php';
require_once 'Logavel.php';

class Professor extends Pessoa
{
    use Logavel;

    public function __construct(string $nome, string $email, private string $disciplina)
    {
        parent::__construct($nome, $email);
    }

    public function exibirPerfil(): string
    {
        return "<strong>Professor:</strong> " . htmlspecialchars($this->nome) . " | <strong>E-mail:</strong> " . htmlspecialchars($this->email) . " | <strong>Disciplina:</strong> " . htmlspecialchars($this->disciplina);
    }
}
