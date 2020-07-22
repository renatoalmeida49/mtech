<?php
class SobreController extends Controller {
    public function index() {
        $dados = array();

        $this->loadTemplate('sobre', $dados);
    }
}