<?php

declare(strict_types=1);

require_once 'Aluno.php';

class Turma
{
    /** @var Aluno[] */
    private array $alunos = [];

    public function __construct(private string $nomeTurma)
    {
    }

    public function adicionarAluno(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function getNomeTurma(): string
    {
        return $this->nomeTurma;
    }

    /**
     * @return Aluno[]
     */
    public function getAlunos(): array
    {
        return $this->alunos;
    }
}
