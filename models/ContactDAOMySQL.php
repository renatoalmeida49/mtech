<?php
require_once 'Contact.php';
class ContactDAOMySQL implements ContactDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function insert(Contact $contato) {
        $sql = "INSERT INTO contacts (name, lastname, email, description, answered) VALUES (:name, :lastname, :email, :description, :answered)";
                
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(':name', $contato->getName());
            $stmt->bindValue(':lastname', $contato->getLastname());
            $stmt->bindValue(':email', $contato->getEmail());
            $stmt->bindValue(':description', $contato->getDescription());
            $stmt->bindValue(':answered', $contato->getAnswered());
            $stmt->execute();
            
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(Contact $contato) {
        $sql = "UPDATE contacts SET answer = :answer, answered = :answered, answeredBy = :answeredBy WHERE id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':answer', $contato->getAnswer());
            $stmt->bindValue(':answered', $contato->getAnswered());
            $stmt->bindValue(':answeredBy', $contato->getAnsweredBy());
            $stmt->bindValue(':id', $contato->getId());

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "ERRO: ".$e->getMessage();
        }
    }

    public function selectAll() {
        $dados = array();

        $sql = "SELECT * FROM contacts WHERE answered = 0";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetchAll();
        }

        return $dados;
    }
    public function selectById($id) {
        $dados = array();

        $sql = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetch();
        }

        return $dados;
    }
    public function delete($id) {}
}