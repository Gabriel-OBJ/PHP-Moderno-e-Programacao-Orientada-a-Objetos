<?php

declare(strict_types=1);

require_once 'RelatorioService.php';
require_once 'Turma.php';

class SistemaAcademico
{
    // A dependência (RelatorioService) é injetada via construtor
    public function __construct(private RelatorioService $relatorioService)
    {
    }

    public function executar(Turma $turma): string
    {
        // O sistema delega a responsabilidade de geração para o serviço injetado
        return $this->relatorioService->gerarRelatorio($turma);
    }
}
