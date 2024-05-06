<?php

// Receber o ID do contato a ser editado
$id = $_GET['id'];

// Conectar ao banco de dados
$conexao = new mysqli('localhost', 'root', 'root', 'agenda_db');

// Consultar o contato pelo ID
$sql = "SELECT * FROM contatos WHERE id = $id";

// Executar a consulta
$resultado = mysqli_query($conexao, $sql);

// Armazenar o resultado da consulta em um array associativo
$contato = mysqli_fetch_assoc($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contato</title>
</head>
<body>
    <h1>Editar Contato</h1>
    <form action="salvar.php" method="post">
        <input type="hidden" name="id" value="<?= $contato['id'] ?>">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?= $contato['nome'] ?>">
        </div>
        <div>
            <label for="fone">Fone:</label>
            <input type="text" name="fone" id="fone" value="<?= $contato['fone'] ?>">
        </div>
        <div>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>