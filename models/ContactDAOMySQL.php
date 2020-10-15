<?php
require_once 'Contact.php';
class ContactDAOMySQL implements ContactDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function insert(Contact $contact) {
        $sql = "INSERT INTO contacts (name, lastname, email, description, answered) VALUES (:name, :lastname, :email, :description, :answered)";
                
        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->bindValue(':name', $contact->getName());
            $stmt->bindValue(':lastname', $contact->getLastname());
            $stmt->bindValue(':email', $contact->getEmail());
            $stmt->bindValue(':description', $contact->getDescription());
            $stmt->bindValue(':answered', $contact->getAnswered());
            $stmt->execute();
            
            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(Contact $contact) {
        $sql = "UPDATE contacts SET answer = :answer, answered = :answered, answeredBy = :answeredBy WHERE id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':answer', $contact->getAnswer());
            $stmt->bindValue(':answered', $contact->getAnswered());
            $stmt->bindValue(':answeredBy', $contact->getAnsweredBy());
            $stmt->bindValue(':id', $contact->getId());

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