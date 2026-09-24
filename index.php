<?php
// Habilita a exibição de erros
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seus dados</title>
    <link rel="stylesheet" href="altera.css">
</head>
<body>

    <form action="insere.php" method="post" class="card-form">
        <h3>Formulário de cadastro</h3>

        <div class="input-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required />
        </div>
        
        <div class="input-group">
            <label for="user">User:</label>
            <input type="text" id="user" name="user" required />
        </div>
        
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
        </div>
        
        <input type="submit" value="Cadastrar" />
    </form>

</body>
</html>