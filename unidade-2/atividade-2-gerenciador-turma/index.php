<?php

declare(strict_types=1);

require_once 'Turma.php';

$turma = new Turma();
$turma->adicionarAluno(new Aluno('João Silva', 8.5));
$turma->adicionarAluno(new Aluno('Maria Oliveira', 5.5));
$turma->adicionarAluno(new Aluno('Pedro Santos', 3.0));
$turma->adicionarAluno(new Aluno('Ana Costa', 9.0));

$mediaTurma = $turma->calcularMediaTurma();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 - Gerenciador de Turma</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #eef2f3; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #17a2b8; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .resumo { margin-top: 20px; padding: 15px; background: #e9ecef; border-left: 5px solid #17a2b8; font-size: 18px; font-weight: bold; color: #495057; }
        .situacao { font-weight: bold; }
        .aprovado { color: #28a745; }
        .recuperacao { color: #fd7e14; }
        .reprovado { color: #dc3545; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciador de Turma (Composição)</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome do Aluno</th>
                    <th>Nota</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($turma->listarAlunos() as $aluno): ?>
                    <?php 
                        $situacao = $aluno->calcularSituacao();
                        $classeCss = strtolower(str_replace('çã', 'ca', $situacao));
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($aluno->getNome()) ?></td>
                        <td><?= number_format($aluno->getNota(), 1, ',', '.') ?></td>
                        <td class="situacao <?= htmlspecialchars($classeCss) ?>"><?= htmlspecialchars($situacao) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="resumo">
            Média da Turma: <?= number_format($mediaTurma, 2, ',', '.') ?>
        </div>
    </div>
</body>
</html>
