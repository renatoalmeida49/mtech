<?php
class LoginController extends Controller {
    public function index() {
        $dados = array();

        if (isset($_POST['login']) && !empty($_POST['login'])) {
            $dao = new UserDAOMySQL(Database::getInstance());

            $user = new User();
            $user->setLogin($_POST['login']);
            $user->setPassword($_POST['password']);

            $user = $dao->selectByLogin($user);

            if ($user->getId() != null) {
                $_SESSION['id'] = $user->getId();
                $_SESSION['login'] = $user->getLogin();

                header("Location: ".BASE_URL."admin");
                exit;
            } else {
                $this->loadTemplate('login', $dados);
            }
        } else {
            $this->loadTemplate('login', $dados);
        }
    }
}