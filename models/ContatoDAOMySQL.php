<?php
require_once 'Contato.php';
class ContatoDAOMySQL implements ContatoDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function insert(Contato $contato) {
        $sql = "INSERT INTO contatos (nome, sobrenome, email, pergunta) VALUES (:nome, :sobrenome, :email, :pergunta)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':nome', $contato->getNome());
            $stmt->bindValue(':sobrenome', $contato->getSobrenome());
            $stmt->bindValue(':email', $contato->getEmail());
            $stmt->bindValue(':pergunta', $contato->getPergunta());
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(Contato $contato) {}
    public function selectAll() {}
    public function selectById($id) {}
    public function delete($id) {}
}