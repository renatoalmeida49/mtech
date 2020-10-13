<?php
class AdminController extends Controller {
    public function index() {
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            $dados = array();

            $dao = new ContactDAOMySQL(Database::getInstance());

            $dados['contatos'] = $dao->selectAll();

            $this->loadTemplate('admin', $dados);
        } else {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }

    public function visualizar($id) {
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            $dados = array();

            $dao = new ContactDAOMySQL(Database::getInstance());

            if (isset($_POST['resposta']) && !empty($_POST['resposta'])) {
                $contato = new Contact();

                $contato->setId($id);
                $contato->setQuemRespondeu($_SESSION['id']);
                $contato->setJaRespondida(1);
                $contato->setResposta($_POST['resposta']);

                if ($dao->update($contato)) {
                    header("Location: ".BASE_URL."admin");
                    exit;
                } else {
                    echo "Erro ao responder contato.";
                }
            } else {
                $dados['pergunta'] = $dao->selectById($id);
                
                $this->loadTemplate('pergunta', $dados);
            }
        } else {
            header("Location: ".BASE_URL."login");
            exit;
        }
    }
}