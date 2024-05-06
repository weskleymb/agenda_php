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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
</head>
<body class="container">
    <h1 class="my-5">Editar Contato</h1>
    <form action="salvar.php" method="post">
        <input type="hidden" name="id" value="<?= $contato['id'] ?>">
        <div class="form-group mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" value="<?= $contato['nome'] ?>">
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="fone">Fone:</label>
            <input class="form-control" type="tel" name="fone" id="fone" value="<?= $contato['fone'] ?>">
        </div>
        <div>
            <button class="btn btn-primary" type="submit">
                <i class="bi bi-floppy2-fill"></i> Salvar
            </button>
            <button class="btn btn-danger" type="reset">
                <i class="bi bi-pencil-square"></i> Limpar
            </button>
        </div>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>