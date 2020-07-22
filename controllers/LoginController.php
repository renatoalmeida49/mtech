<?php
class LoginController extends Controller {
    public function index() {
        $dados = array();

        $this->loadTemplate('login', $dados);
    }
}