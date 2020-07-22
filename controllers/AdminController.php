<?php
class AdminController extends Controller {
    public function index() {
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            $dados = array();

            $dao = new ContatoDAOMySQL(Database::getInstance());

            $dados['contatos'] = $dao->selectAll();

            $this->loadTemplate('admin', $dados);
        } else {
            header("Location: ".BASE_URL."login");
        }
    }

    public function visualizar($id) {
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            $dados = array();

            $dao = new ContatoDAOMySQL(Database::getInstance());

            if (isset($_POST['resposta']) && !empty($_POST['resposta'])) {
                $contato = new Contato();

                $contato->setId($id);
                $contato->setQuemRespondeu($_SESSION['id']);
                $contato->setJaRespondida(1);
                $contato->setResposta($_POST['resposta']);

                if ($dao->update($contato)) {
                    header("Location: ".BASE_URL."admin");
                } else {
                    echo "Erro ao responder contato.";
                }
            } else {
                $dados['pergunta'] = $dao->selectById($id);
                
                $this->loadTemplate('pergunta', $dados);
            }
        } else {
            header("Location: ".BASE_URL."login");
        }
    }
}