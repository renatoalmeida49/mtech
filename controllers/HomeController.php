<?php
class HomeController extends Controller {

    public function index() {
        $dados = array();

        unset($_SESSION['id']);

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $contato = new Contato();

            $contato->setNome($_POST['nome']);
            $contato->setSobrenome($_POST['sobrenome']);
            $contato->setEmail($_POST['email']);
            $contato->setPergunta($_POST['pergunta']);
            $contato->setJaRespondida(0);

            $dao = new ContatoDAOMySQL(Database::getInstance());

            if ($dao->insert($contato)) {
                header("Location: ".BASE_URL);
            } else {
                echo "Erro ao enviar solicitação de contato";
            }
        }

        $this->loadTemplate('home', $dados);
    }

    public function error404() {
        $dados = array();

        $this->loadTemplate('error404', $dados);
    }
}