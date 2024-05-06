<?php

// Receber os dados do formulário
$nome = $_POST['nome'];
$fone = $_POST['fone'];

// Conectar ao banco de dados
$conexao = new mysqli('localhost', 'root', 'root', 'agenda_db');

// Inserir os dados na tabela contatos
$sql = "INSERT INTO contatos (nome, fone) VALUES ('$nome', '$fone')";

// Executar a consulta
$conexao->query($sql);

// Redirecionar para a página inicial
header('Location: index.php');
