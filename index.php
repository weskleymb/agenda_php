<?php

// Conectar ao banco de dados
$conexao = new mysqli('localhost', 'root', 'root', 'agenda_db');

// Consultar a tabela contatos
$sql = "SELECT * FROM contatos";

// Executar a consulta
$resultado = $conexao->query($sql);

// Criar um array para armazenar os contatos
$contatos = [];

// Percorrer os resultados da consulta e armazenar no array
while ($contato = $resultado->fetch_assoc()) {
    $contatos[] = $contato;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
</head>
<body class="container">
    
    <h1 class="my-5">Agenda de Contatos</h1>

    <a href="novo.php" class="btn btn-primary mb-3">
        <i class="bi bi-person-plus-fill"></i> Novo Contato
    </a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Fone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <!-- Percorrer o array de contatos e exibir os dados na tabela -->
            <?php foreach ($contatos as $contato) : ?>
                <tr>
                    <td><?= $contato['id'] ?></td>
                    <td><?= $contato['nome'] ?></td>
                    <td><?= $contato['fone'] ?></td>
                    <td>
                        <a class="btn btn-success btn-sm" title="Editar" href="http://localhost:81/agenda/editar.php?id=<?= $contato['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </a> 
                        | 
                        <a class="btn btn-danger btn-sm" title="Remover" href="http://localhost:81/agenda/remover.php?id=<?= $contato['id'] ?>">
                            <i class="bi bi-trash3-fill"></i>
                        </a> 
                    </td>
                </tr>
            <?php endforeach; ?>
            <!-- Fim do loop -->
        </tbody>
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>