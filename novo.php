<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato</title>
</head>
<body>
    <h1>Novo Contato</h1>
    <form action="salvar.php" method="post">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="fone">Fone:</label>
            <input type="text" name="fone" id="fone">
        </div>
        <div>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>