<?php
class SobreController extends Controller {
    public function index() {
        $dados = array();

        $_SESSION['id'] = 0;

        $this->loadTemplate('sobre', $dados);
    }
}