<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//verifica se existe conexão com bd, caso não tenta criar uma nova
$conexao = mysqli_connect("localhost", "denisson", "123456") // porta, usuário, senha
or die("Erro na conexão com banco de dados"); // caso não consiga conectar mostra a mensagem de erro

$select_db = mysqli_select_db($conexao, "novo"); // seleciona o banco de dados

// Abaixo atribuímos os valores provenientes do formulário pelo método POST
$nome = $_POST["nome"];
$user = $_POST["user"];
$email = $_POST["email"];

$string_sql = "INSERT INTO pessoa (id,nome,user,email) VALUES (null, '$nome', '$user', '$email')";

mysqli_query($conexao, $string_sql); // Realiza a consulta

        if (mysqli_affected_rows($conexao) == 1) { // Verifica se foi afetada alguma linha, nesse caso inserida alguma linha
    echo "<p>Cadastro feito com sucesso.</p>";
    echo '<a href="index.html">Voltar para pagina principal da empresa</a>'; // Apenas um link para retornar para o site da empresa
} else {
    echo "Erro, não foi possível inserir no banco de dados";
}
 mysqli_close($conexao); //fechar conexao com banco de dados
?>




?>