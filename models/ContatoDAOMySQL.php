<?php
require_once 'Contato.php';
class ContatoDAOMySQL implements ContatoDAO {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function insert(Contato $contato) {
        $sql = "INSERT INTO contatos (nome, sobrenome, email, pergunta, jarespondida) VALUES (:nome, :sobrenome, :email, :pergunta, :jarespondida)";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':nome', $contato->getNome());
            $stmt->bindValue(':sobrenome', $contato->getSobrenome());
            $stmt->bindValue(':email', $contato->getEmail());
            $stmt->bindValue(':pergunta', $contato->getPergunta());
            $stmt->bindValue(':jarespondida', $contato->getJaRespondida());
            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function update(Contato $contato) {
        $sql = "UPDATE contatos SET resposta = :resposta, jarespondida = :jarespondida, quemrespondeu = :quemrespondeu WHERE id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(':resposta', $contato->getResposta());
            $stmt->bindValue(':jarespondida', $contato->getJaRespondida());
            $stmt->bindValue(':quemrespondeu', $contato->getQuemRespondeu());
            $stmt->bindValue(':id', $contato->getId());

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo "ERRO: ".$e->getMessage();
        }
    }

    public function selectAll() {
        $dados = array();

        $sql = "SELECT * FROM contatos";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $dados = $stmt->fetchAll();
        }

        return $dados;
    }
    public function selectById($id) {
        $dados = array();

        $sql = "SELECT * FROM contatos WHERE id = :id";

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