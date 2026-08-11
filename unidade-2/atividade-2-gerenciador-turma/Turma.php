<?php

declare(strict_types=1);

require_once 'Aluno.php';

class Turma
{
    /** @var Aluno[] */
    private array $alunos = [];

    public function adicionarAluno(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    /**
     * @return Aluno[]
     */
    public function listarAlunos(): array
    {
        return $this->alunos;
    }

    public function calcularMediaTurma(): float
    {
        if (count($this->alunos) === 0) {
            return 0.0;
        }

        // Uso de arrow function (fn) conforme requisito
        $somaDasNotas = array_reduce(
            $this->alunos,
            fn(float $acumulador, Aluno $aluno) => $acumulador + $aluno->getNota(),
            0.0
        );

        return $somaDasNotas / count($this->alunos);
    }
}
