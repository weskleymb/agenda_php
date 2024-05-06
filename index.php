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
</head>
<body>
    <h1>Agenda de Contatos</h1>

    <table border="1">
        <tr>
            <td>#</td>
            <td>Nome</td>
            <td>Fone</td>
            <td>Ações</td>
        </tr>
        <?php foreach ($contatos as $contato) : ?>
            <tr>
                <td><?= $contato['id'] ?></td>
                <td><?= $contato['nome'] ?></td>
                <td><?= $contato['fone'] ?></td>
                <td>editar | remover</td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>