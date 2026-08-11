<?php

declare(strict_types=1);

require_once 'Aluno.php';
require_once 'Professor.php';

$aluno = new Aluno('Carlos Silva', 'carlos@escola.com', 8.5);
$professor = new Professor('Renato', 'renato@escola.com', 'Programação Web I');

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4 - Herança e Traits</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f0f2f5; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; border-bottom: 2px solid #007bff; padding-bottom: 10px; margin-bottom: 30px; }
        .card { background: #f8f9fa; border: 1px solid #dee2e6; border-radius: 5px; padding: 20px; margin-bottom: 20px; }
        .card h3 { margin-top: 0; color: #007bff; }
        .perfil { font-size: 16px; margin-bottom: 15px; }
        .log { background: #343a40; color: #20c997; padding: 10px; border-radius: 4px; font-family: monospace; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perfis de Usuários (Herança e Traits)</h1>
        
        <div class="card">
            <h3>Perfil do Aluno</h3>
            <div class="perfil">
                <?= $aluno->exibirPerfil() ?>
            </div>
            <div class="log">
                <?= htmlspecialchars($aluno->registrarLog('Visualização do perfil do aluno.')) ?>
            </div>
        </div>

        <div class="card">
            <h3>Perfil do Professor</h3>
            <div class="perfil">
                <?= $professor->exibirPerfil() ?>
            </div>
            <div class="log">
                <?= htmlspecialchars($professor->registrarLog('Lançamento de notas concluído no sistema.')) ?>
            </div>
        </div>
    </div>
</body>
</html>
