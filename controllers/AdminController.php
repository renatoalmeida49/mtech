<?php
class AdminController extends Controller {
    public function index() {
        if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
            $dados = array();

            $this->loadTemplate('admin', $dados);
        } else {
            header("Location: ".BASE_URL."login");
        }
    }
}