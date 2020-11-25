<?php
require 'core/Settings.php';

class HomeController extends Controller {

    private function getHeaders($email) {
        $headers = 'From: '.Settings::FROM."\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
        $headers .= 'Reply-To: '.$email;

        return $headers;
    }

    public function index() {
        $dados = array();

        if(!empty($_GET['lang'])) {
            $_SESSION['lang'] = filter_input(INPUT_GET, 'lang');
        }

        $dados['lang'] = new Language();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            $name = filter_input(INPUT_POST, 'nome');
            $lastname = filter_input(INPUT_POST, 'sobrenome');
            $email = filter_input(INPUT_POST, 'email');
            $pergunta = filter_input(INPUT_POST, 'pergunta');

            $headers = $this->getHeaders($email);

            $message = "
                <html>
                    
                    <p><strong>Nome:</strong> $name</p>
                    
                    <p><strong>E-mail:</strong> $email</p>
                    
                    <p><strong>Mensagem:</strong> $pergunta</p>
                    
                </html>
            ";

            
            mail(Settings::TO, Settings::SUBJECT, $message, $headers); 
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