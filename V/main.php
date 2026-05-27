<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo</h1>
    <form action="../C/processa.php" method="POST">
        <p>
            Nome:
            <input type="text" required name="nome">
        </p>
        <p>
            Publicidade?
            <input type="radio" name="publicidade" value="y" checked>
            <label for="y">Sim</label>
            <input type="radio" name="publicidade" value="n">
            <label for="n">Não</label>
        </p>
        <p>
            Idade :
            <input type="number" name="idade" required min="0">
        </p>
        <p>
            <button type="submit">Enviar</button>
        </p>
    </form>
</body>
</html>