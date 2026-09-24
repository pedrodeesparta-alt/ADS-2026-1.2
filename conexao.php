<?php
// Declaração da classe Conexao responsável por gerenciar a conexão com o banco de dados
class Conexao {
    // Propriedade estática privada para armazenar a única instância da conexão (Padrão Singleton)
    private static $instancia = null;

    // Método estático público para obter a instância da conexão PDO
    public static function getConexao() {
        // Verifica se a instância ainda não foi criada na memória
        if (self::$instancia === null) {
            try {
                // Tenta instanciar uma nova conexão PDO com o banco MariaDB informando host, nome do banco, charset, usuário e senha
                self::$instancia = new PDO("mysql:host=localhost;dbname=novo;charset=utf8", "denisson", "123456");
                // Configura o atributo do PDO para lançar exceções caso ocorra algum erro nas operações SQL
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Interrompe a execução do script e exibe a mensagem de erro detalhada caso falhe
                die("Erro na conexão com banco de dados: " . $e->getMessage());
            }
        }
        // Retorna a instância única da conexão PDO
        return self::$instancia;
    }
}
?>