<?php
class ContatoController extends Controller {
    public function index() {
        $dados = array();

        $this->loadTemplate('contato', $dados);
    }
}