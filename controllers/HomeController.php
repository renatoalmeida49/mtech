<?php
class HomeController extends Controller {

    public function index() {
        $dados = array();

        $this->loadTemplate('home', $dados);
    }

    public function error404() {
        $dados = array();
        //echo "welcome to 404";
        $this->loadTemplate('error404', $dados);
    }
}