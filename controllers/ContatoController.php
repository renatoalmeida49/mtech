<?php
class ContatoController extends Controller {
    public function index() {
        $dados = array();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $contato = new Contato();

            $contato->setNome($_POST['nome']);
            $contato->setSobrenome($_POST['sobrenome']);
            $contato->setEmail($_POST['email']);
            $contato->setPergunta($_POST['pergunta']);

            $dao = new ContatoDAOMySQL(Database::getInstance());

            if ($dao->insert($contato)) {
                header("Location: ".BASE_URL);
            } else {
                echo "Erro ao enviar solicitação de contato";
            }
        } else {
            $this->loadTemplate('contato', $dados);
        }
    }
}