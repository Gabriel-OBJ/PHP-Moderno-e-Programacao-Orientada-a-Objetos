<?php
declare(strict_types=1);

require_once 'Aluno.php';

$alunos = [
    new Aluno('João Silva', 8.5),
    new Aluno('Maria Oliveira', 5.5),
    new Aluno('Pedro Santos', 3.0),
];

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - Refatoração para POO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        .aprovado { color: green; font-weight: bold; }
        .recuperacao { color: orange; font-weight: bold; }
        .reprovado { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Situação dos Alunos (Refatoração POO)</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nota</th>
                    <th>Situação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno): ?>
                    <?php 
                        $situacao = $aluno->verificarSituacao();
                        $classeCss = strtolower(str_replace('çã', 'ca', $situacao)); 
                    ?>
                    <tr>
                        <td><?= htmlspecialchars($aluno->nome) ?></td>
                        <td><?= number_format($aluno->nota, 1, ',', '.') ?></td>
                        <td class="<?= htmlspecialchars($classeCss) ?>"><?= htmlspecialchars($situacao) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
