<?php
class LoginController extends Controller {
    public function index() {
        $dados = array();

        unset($_SESSION['id']);
        unset($_SESSION['login']);
        unset($_SESSION['senha']);

        if (isset($_POST['login']) && !empty($_POST['login'])) {
            $dao = new UsuarioDAOMySQL(Database::getInstance());

            $usuario = new Usuario();
            $usuario->setLogin($_POST['login']);
            $usuario->setSenha($_POST['password']);

            $usuario = $dao->selectByLogin($usuario);

            if ($usuario->getId() != null) {
                $_SESSION['id'] = $usuario->getId();
                $_SESSION['login'] = $usuario->getLogin();

                header("Location: ".BASE_URL."admin");
            } else {
                $this->loadTemplate('login', $dados);
            }
        } else {
            $this->loadTemplate('login', $dados);
        }
    }
}