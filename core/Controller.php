<?php
class Controller {
    public function loadTemplate($viewName, $viewData = array()) {
        require 'views/partials/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);

        require 'views/pages/'.$viewName.'.php';
    }

    public function loadPartial($viewName, $viewData = array()) {
        extract($viewData);

        require 'views/partials/'.$viewName.'.php';
    }
}