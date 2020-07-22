<?php
class HomeController extends Controller {

    public function index() {
        $dados = array();

        unset($_SESSION['id']);

        $this->loadTemplate('home', $dados);
    }

    public function error404() {
        $dados = array();

        $this->loadTemplate('error404', $dados);
    }
}