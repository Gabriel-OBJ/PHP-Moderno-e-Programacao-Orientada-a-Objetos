<?php

declare(strict_types=1);

require_once 'Turma.php';

class RelatorioService
{
    public function gerarRelatorio(Turma $turma): string
    {
        $html = "<div class='relatorio'>";
        $html .= "<h2>Relatório de Desempenho: " . htmlspecialchars($turma->getNomeTurma()) . "</h2>";
        $html .= "<ul>";
        
        foreach ($turma->getAlunos() as $aluno) {
            $html .= "<li><strong>" . htmlspecialchars($aluno->getNome()) . "</strong> - Nota: " . number_format($aluno->getNota(), 1, ',', '.') . "</li>";
        }
        
        $html .= "</ul>";
        $html .= "</div>";
        
        return $html;
    }
}
