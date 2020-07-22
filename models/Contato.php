<?php
class Contato {
    private $id;
    private $nome;
    private $sobrenome;
    private $email;
    private $pergunta;
    private $resposta;
    private $jarespondida;
    private $quemrespondeu;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPergunta() {
        return $this->pergunta;
    }

    public function getResposta() {
        return $this->resposta;
    }

    public function getJaRespondida() {
        return $this->jarespondida;
    }

    public function getQuemRespondeu() {
        return $this->quemrespondeu;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPergunta($pergunta) {
        $this->pergunta = $pergunta;
    }

    public function setResposta($resposta) {
        $this->resposta = $resposta;
    }

    public function setJaRespondida($jarespondida) {
        $this->jarespondida = $jarespondida;
    }

    public function setQuemRespondeu($quemrespondeu) {
        $this->quemrespondeu = $quemrespondeu;
    }

}

interface ContatoDAO {
    public function insert(Contato $contato);
    public function update(Contato $contato);
    public function selectAll();
    public function selectById($id);
    public function delete($id);
}