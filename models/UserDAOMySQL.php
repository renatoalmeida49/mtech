<?php
require_once 'User.php';
class UserDAOMySQL implements UserDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectByLogin(User $user) {
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':login', $user->getLogin());
        $stmt->bindValue(':password', md5($user->getPassword()));

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch();

            $user->setId($result['id']);
            $user->setLogin($result['login']);
            $user->setPassword($result['password']);

            return $user;
        } else {
            echo "Falha ou usuário não encontrado.";
        }
    }
}