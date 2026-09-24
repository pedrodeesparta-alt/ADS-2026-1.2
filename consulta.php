<?php
// Inclui o arquivo da classe Pessoa
require_once 'pessoa.php';

// Chama o método estático listarTodos() para recuperar todos os registros do banco em formato de array
$pessoas = Pessoa::listarTodos();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Cadastros</title>
    <link rel="stylesheet" href="altera.css">
</head>
<body>

    <div class="container-table">
        <div class="header-action">
            <h3>Lista de Pessoas Cadastradas</h3>
            <a href="index.php" class="btn-novo">+ Novo Cadastro</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>User</th>
                        <th>Email</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($pessoas)): ?>
                        <?php foreach ($pessoas as $pessoa): ?>
                            <tr>
                                <td><span class="badge-id">#<?php echo htmlspecialchars($pessoa['id']); ?></span></td>
                                <td><strong><?php echo htmlspecialchars($pessoa['nome']); ?></strong></td>
                                <td><span class="user-tag">@<?php echo htmlspecialchars($pessoa['user']); ?></span></td>
                                <td><?php echo htmlspecialchars($pessoa['email']); ?></td>
                                <td class="actions-cell">
                                    <a href="edita.php?id=<?php echo $pessoa['id']; ?>" class="btn-action btn-edit">Editar</a>
                                    <a href="deleta.php?id=<?php echo $pessoa['id']; ?>" class="btn-action btn-delete" onclick="return confirm('Deseja excluir este registro?')">Excluir</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="no-records">Nenhum registro encontrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>