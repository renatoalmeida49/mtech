<?php
class HomeController extends Controller {

    public function index() {
        $dados = array();

        unset($_SESSION['id']);

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $contact = new Contact();

            $contact->setName($_POST['nome']);
            $contact->setLastname($_POST['sobrenome']);
            $contact->setEmail($_POST['email']);
            $contact->setDescription($_POST['pergunta']);
            $contact->setAnswered(0);

            $dao = new ContactDAOMySQL(Database::getInstance());

            if ($dao->insert($contact)) {
                header("Location: ".BASE_URL);
                exit;
            } else {
                echo "Erro ao enviar solicitação de contato";
            }                
        }

        $this->loadTemplate('home', $dados);
    }

    public function error404() {
        $dados = array();

        if (isset($_SESSION['controller'])) {
            $dados['controller'] = $_SESSION['controller'];
            $dados['action'] = $_SESSION['action'];

            $_SESSION['controller'] = '';
            $_SESSION['action'] = '';
        }

        $this->loadTemplate('error404', $dados);
    }
}