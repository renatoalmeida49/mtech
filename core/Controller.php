<?php
class Controller {
    public function loadTemplate($viewName, $viewData = array()) {
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewNmae, $viewData = array()) {
        extract($viewData);

        require 'views/'.$viewName.'.php';
    }
}