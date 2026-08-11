<?php

declare(strict_types=1);

require_once 'Aluno.php';
require_once 'Professor.php';

// Array misto com objetos que implementam Avaliavel e valores nulos
$listaAvaliacao = [
    new Aluno('João Silva', 8.5),
    new Professor('Carlos Andrade', 4),
    new Aluno('Maria Oliveira', 5.0),
    null, // Simulação de um registro não encontrado ou vazio (para o Null Safe Operator)
    new Professor('Ana Souza', 2)
];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 - Interfaces e Polimorfismo</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #fdfbfb; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; border-bottom: 2px solid #6c757d; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #dee2e6; text-align: left; }
        th { background-color: #6c757d; color: white; }
        tr:nth-child(even) { background-color: #f8f9fa; }
        .null-row { background-color: #ffeeba !important; font-style: italic; color: #856404; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Painel de Avaliação (Polimorfismo)</h1>
        <p>Demonstração do polimorfismo, onde objetos diferentes respondem ao mesmo método <code>calcularResultado()</code>, e do operador <strong>Null Safe (?->)</strong> em registros vazios.</p>
        <table>
            <thead>
                <tr>
                    <th>Tipo (Classe)</th>
                    <th>Nome</th>
                    <th>Resultado da Avaliação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaAvaliacao as $avaliado): ?>
                    <tr class="<?= $avaliado === null ? 'null-row' : '' ?>">
                        <td><?= $avaliado ? get_class($avaliado) : 'N/A' ?></td>
                        <!-- Uso do operador Null Safe (?->) para acesso seguro aos métodos -->
                        <td><?= htmlspecialchars($avaliado?->getNome() ?? 'Desconhecido') ?></td>
                        <td><?= htmlspecialchars($avaliado?->calcularResultado() ?? 'Nenhum resultado processado') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
