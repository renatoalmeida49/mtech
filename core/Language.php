<?php
class Language {

    private $lang;
    private $ini;

    public function __construct() {
        $this->lang = 'pt-br';

        if(!empty($_SESSION['lang']) && file_exists('views/lang/'.$_SESSION['lang'].'.ini')) {
            $this->lang = $_SESSION['lang'];
        }

        $this->ini = parse_ini_file('views/lang/'.$this->lang.'.ini');
    }

    public function get($word, $return = false) {
        $text = $word;

        if(isset($this->ini[$word])) {
            $text = $this->ini[$word];
        }

        if($return) {
            return $text;
        } else {
            echo $text;
        }
    }

    public function getIni() {
        return $this->ini;
    }

}