<?php
class Contact {
    private $id;
    private $name;
    private $lastname;
    private $email;
    private $description;
    private $answer;
    private $answered;
    private $answeredBy;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function getAnswered() {
        return $this->answered;
    }

    public function getAnsweredBy() {
        return $this->answeredBy;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setAnswer($answer) {
        $this->answer = $answer;
    }

    public function setAnsweredBy($answeredBy) {
        $this->answeredBy = $answeredBy;
    }

    public function setAnswered($answered) {
        $this->answered = $answered;
    }

}

interface ContactDAO {
    public function insert(Contact $contact);
    public function update(Contact $contact);
    public function selectAll();
    public function selectById($id);
    public function delete($id);
}