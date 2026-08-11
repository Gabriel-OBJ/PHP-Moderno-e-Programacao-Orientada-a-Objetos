<?php

declare(strict_types=1);

require_once 'Aluno.php';
require_once 'Turma.php';
require_once 'RelatorioService.php';
require_once 'SistemaAcademico.php';

// 1. Preparação dos dados
$turma = new Turma('Desenvolvimento Web Back-End');
$turma->adicionarAluno(new Aluno('Aline Fernandes', 9.5));
$turma->adicionarAluno(new Aluno('Bruno Souza', 7.0));
$turma->adicionarAluno(new Aluno('Carla Mendes', 8.2));

// 2. Instanciação da dependência (Serviço)
$relatorioService = new RelatorioService();

// 3. Injeção da dependência no Sistema
$sistema = new SistemaAcademico($relatorioService);

// 4. Execução
$relatorioGerado = $sistema->executar($turma);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5 - Injeção de Dependência</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #e9ecef; margin: 0; padding: 20px; }
        .container { max-width: 700px; margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #343a40; text-align: center; border-bottom: 2px solid #17a2b8; padding-bottom: 10px; }
        .info { background: #d1ecf1; color: #0c5460; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #bee5eb; }
        .relatorio { background: #f8f9fa; border-left: 5px solid #17a2b8; padding: 20px; border-radius: 4px; }
        .relatorio h2 { margin-top: 0; color: #495057; font-size: 20px; }
        .relatorio ul { list-style-type: square; color: #495057; }
        .relatorio li { margin-bottom: 8px; font-size: 16px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Injeção de Dependência (DI)</h1>
        
        <div class="info">
            <strong>Conceito Aplicado:</strong> O <code>SistemaAcademico</code> não cria a sua própria instância de <code>RelatorioService</code>. Em vez disso, a dependência é <em>injetada</em> através do construtor, promovendo o desacoplamento das classes.
        </div>
        
        <?= $relatorioGerado ?>
        
    </div>
</body>
</html>
