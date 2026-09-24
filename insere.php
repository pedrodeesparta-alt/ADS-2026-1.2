<?php
// Habilita a exibição de todos os erros do PHP na tela para fins de depuração
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

// Inclui o arquivo contendo a classe Pessoa
require_once 'pessoa.php';

// Inicia a estrutura HTML e inclui o CSS Dark Mode
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Cadastro</title>
    <link rel="stylesheet" href="altera.css">
</head>
<body>
    <div class="container">
<?php
// Verifica se a requisição HTTP foi enviada estritamente pelo método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados enviados via POST utilizando o operador de coalescência nula
    $nome = $_POST["nome"] ?? '';
    $user = $_POST["user"] ?? '';
    $email = $_POST["email"] ?? '';

    // Instancia o objeto Pessoa passando os dados recebidos para o construtor
    $pessoa = new Pessoa(null, $nome, $user, $email);

    // Executa o método inserir() e verifica se retornou verdadeiro (sucesso)
    if ($pessoa->inserir()) {
        echo "<p>Cadastro feito com sucesso</p><br/>";
        echo '<a href="consulta.php">Ver Cadastros</a> | <a href="index.php">Voltar para home</a><br/><br/>';
        // Configura o cabeçalho HTTP para redirecionar automaticamente para a consulta após 3 segundos
        header("refresh:3;url=consulta.php");
        echo 'Redirecionando para a listagem em 3 segundos!';
    } else {
        echo "Erro, não foi possível inserir no banco de dados<br/>";
        header("refresh:3;url=index.php");
        echo 'Redirecionando a página em 3 segundos!';
    }
} else {
    // Caso o script seja acessado diretamente sem passar pelo formulário POST, redireciona
    header("Location: index.php");
    exit();
}
?>
    </div>
</body>
</html>