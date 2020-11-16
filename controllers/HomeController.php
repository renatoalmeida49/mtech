<?php
class HomeController extends Controller {

    public function index() {
        $dados = array();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $from = "contato@sistemas.life";
            $to = "renatoalmeida49@gmail.com";

            $name = filter_input(INPUT_POST, 'nome');
            $lastname = filter_input(INPUT_POST, 'sobrenome');
            $email = filter_input(INPUT_POST, 'email');
            $pergunta = filter_input(INPUT_POST, 'pergunta');

            $headers = 'From: '.$from."\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
            $headers .= 'Reply-To: '.$email;

            $subject = "Contato MTech";

            $message = "
                <html>
                    
                    <p><strong>Nome:</strong> $name</p>
                    
                    <p><strong>E-mail:</strong> $email</p>
                    
                    <p><strong>Mensagem:</strong> $pergunta</p>
                    
                </html>
            ";

            
            mail($to, $subject, $message, $headers); 
        }

        $this->loadTemplate('home', $dados);
    }

    public function logout() {
        unset($_SESSION['id']);

        header("Location: ".BASE_URL);
        exit;
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