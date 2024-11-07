<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de cadastros</title>
</head>
<body>

<h1>cadastro de usuário</h1>
<form method="post" action="salvar.php">
    nome: <input type="text" name="nome" required><br><br>
    E-mail: <input type="email" name="email" required> 
    senha: <input type="password" name="senha" required>
    <button type="submit">salvar</button>

</form>
    
</body>
</html>