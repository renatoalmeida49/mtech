<?php
require_once 'Usuario.php';
class UsuarioDAOMySQL implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectByLogin(Usuario $usuario) {
        $sql = "SELECT * FROM usuarios WHERE login = :login AND senha = :senha";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':login', $usuario->getLogin());
        $stmt->bindValue(':senha', md5($usuario->getSenha()));

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch();

            $usuario->setId($resultado['id']);
            $usuario->setLogin($resultado['login']);
            $usuario->setSenha($resultado['senha']);

            return $usuario;
        } else {
            echo "Falha ou usuário não encontrado.";
        }
    }
}