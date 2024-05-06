<?php

// Conectar ao banco de dados
$conexao = new mysqli('localhost', 'root', 'root', 'agenda_db');

// Receber o ID do contato a ser removido
$id = $_GET['id'];

// Remover o contato pelo ID
$sql = "DELETE FROM contatos WHERE id = $id";

// Executar a consulta
$conexao->query($sql);

// Redirecionar para a página inicial
header('Location: index.php');