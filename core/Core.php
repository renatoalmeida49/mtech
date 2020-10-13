<?php
class Core {
    public function run() {
        $url = '/';

        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        $params = array();

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);

            array_shift($url);

            $currentController = ucfirst($url[0]).'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $currentController = 'HomeController';
            $currentAction = 'index';
        }

        if (!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
            $_SESSION['controller'] = $currentController;
            $_SESSION['action'] = $currentAction;

            $currentController = 'HomeController';
            $currentAction = 'error404';
        }

        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params);
    }
}