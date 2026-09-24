<?php
// Habilita a exibição de erros na tela para fins de desenvolvimento e depuração
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);
?>
<?php
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
    <!-- Vincula o arquivo de estilo altera.css -->
    <link rel="stylesheet" href="altera.css">
</head>
<body>

    <div class="container">
        <h3>Formulário de cadastro</h3>
        
        <form action="insere.php" method="post">
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
    </div>

</body>
</html>
    <h3>Formulário de cadastro</h3>
    <form action="insere.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required />
        <br /><br />
        
        <label for="user">User: </label>
        <input type="text" name="user" required />
        <br /><br />
        
        <label for="email">Email: </label>
        <input type="email" name="email" required />
        <br /><br />
        
        <input type="submit" value="Cadastrar" />
    </form>
</body>
</html